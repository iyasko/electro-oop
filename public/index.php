<?php

use App\Kernel\Router\Router;

require_once __DIR__  . '/../vendor/autoload.php';

[$controllerName, $actionName, $arguments] = (new Router())->map($_SERVER['REQUEST_URI']);

call_user_func([new $controllerName(), $actionName], ...$arguments);