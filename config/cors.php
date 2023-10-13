<?php

declare(strict_types=1);

return [
    'allow-credentials' => true,
    'max-age' => 86400,
    'methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
    'headers' => ['Content-Type', 'Authorization'],
    'allow-origin' => ['*'],
    'paths' => ['api/*'],
    'optionsSuccessStatus' => 204
];
