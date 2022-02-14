<?php
declare(strict_types=1);

namespace App\Kernel\Model;

use App\Kernel\DBConnection;

abstract class Model
{
    public static function findAll(): array
    {
        $connection = new DBConnection();

        return $connection->query(
            sprintf('SELECT * FROM `%s`', static::getTableName()),
            [],
            static::class
        );
    }

    public static function findById(int $id): ?self
    {
        $connection = new DBConnection();

        $result = $connection->query(
            sprintf('SELECT * FROM `%s` WHERE `id` = :id', static::getTableName()),
            ['id' => $id],
            static::class
        );

        return $result[0] ?? null;
    }

    public function __set(string $name, $value): void
    {
        $property = $this->underscoreToCamelCase($name);
        $this->$property = $value;
    }

    abstract protected static function getTableName(): string;

    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }
}