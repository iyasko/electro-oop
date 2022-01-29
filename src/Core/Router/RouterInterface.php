<?php
declare(strict_types=1);

namespace App\Core\Router;

interface RouterInterface
{
    public function map(string $uri): array;
}