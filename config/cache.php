<?php

return [
    'default_driver' => 'file_storage',
    'driver' => [
        'file_storage' => [],
        'redis' => [
            'scheme' => 'tcp',
            'host'   => env('REDIS_HOST'),
            'port'   => env('REDIS_PORT',6379),
            'password' => env('REDIS_PASSWORD'),
        ],
    ]
];
