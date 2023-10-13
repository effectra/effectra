<?php

namespace App;

use Effectra\Core\Middlewares\CorsMiddleware;

class AppCore
{
    public $middlewares = [
        'web' => [
        ],
        'api' => [
            CorsMiddleware::class
        ],
    ];
    public $routeMiddlewares = [
    ];
    public $commands = [];
}
