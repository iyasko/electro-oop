<?php
declare(strict_types=1);

namespace App\Kernel;

class DBConnection
{
    private const DB_HOST = 'localhost';
    private const DB_PORT = '3306';
    private const DB_USER = 'homestead';
    private const DB_PASSWORD = 'secret';
    private const DB_NAME = 'ecomerce_test';

    private \PDO $connection;

    public function __construct()
    {
        $this->connection = new \PDO(
            sprintf('mysql:dbname=%s;host=%s;port=%s', self::DB_NAME, self::DB_HOST, self::DB_PORT),
            self::DB_USER,
            self::DB_PASSWORD
        );
    }

    public function query(string $query, array $params, $class): array
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, $class);
    }
}