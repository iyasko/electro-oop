<?php
declare(strict_types=1);

namespace App\Core\Router;

use App\Controller\HomeController;
use App\Controller\ProductController;
use App\Core\Router\Exception\PageNotFoundException;

class Router implements RouterInterface
{
    /**
     * @throws PageNotFoundException
     */
    public function map(string $queryString): array
    {
        $url = $this->parseQueryString($queryString);
        foreach ($this->getAvailablePaths() as $route => $handler) {
            $route = str_replace('/', '\/', $route);
            preg_match('/^' . $route . '$/', $url, $mathes);

            if (!empty($mathes)) {
                $arguments = array_filter($mathes, 'is_string', ARRAY_FILTER_USE_KEY);

                return [...$handler, $arguments];
            }
        }

        throw new PageNotFoundException(sprintf('Page %s not found', $url));
    }

    private function getAvailablePaths(): array
    {
        return [
            '/' => [HomeController::class, 'indexAction'],
            '/product/(?P<id>.+)' => [ProductController::class, 'productAction'],
        ];
    }

    private function parseQueryString(string $queryString): string
    {
        return (explode('?', $queryString))[0];
    }

}