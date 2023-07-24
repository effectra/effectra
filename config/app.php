<?php


return [
    'lang' => 'en',
    'errors' => [
        'display' => true,
    ],
    'providers' => [
        /** APP PROVIDERS */
        \Effectra\Core\Providers\ApplicationProvider::class,
        \Effectra\Core\Providers\LoggerProvider::class,
        \Effectra\Core\Providers\SessionProvider::class,
        \Effectra\Core\Providers\SessionInterfaceProvider::class,
        \Effectra\Core\Providers\AuthProvider::class,
        \Effectra\Core\Providers\TokenProvider::class,
        \Effectra\Core\Providers\RouterProvider::class,
        \Effectra\Core\Providers\DatabaseProvider::class,
        \Effectra\Core\Providers\ViewProvider::class,
        \Effectra\Core\Providers\MailerProvider::class,
        \Effectra\Core\Providers\InboxProvider::class,
        \Effectra\Core\Providers\GeneratorConfigFileProvider::class,
        \Effectra\Core\Providers\GeneratorClassProvider::class,
        \Effectra\Core\Providers\GenerateMiddlewareProvider::class,
        \Effectra\Core\Providers\LocalizationProvider::class,
        \Effectra\Core\Providers\CacheInterfaceProvider::class,
        \Effectra\Core\Providers\CacheProvider::class,
        \Effectra\Core\Providers\GoogleProvider::class,
        /** ADD YOUR SERVICES */

    ],
];
