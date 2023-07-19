<?php

return [
    'sender' => [
        'driver' => 'smtp',
        'host' => env('MAIL_SENDER_HOST'),
        'port' => env('MAIL_SENDER_PORT', 465),
        'username' => env('MAIL_SENDER_USERNAME'),
        'password' => env('MAIL_SENDER_PASSWORD'),
        'from' => env('MAIL_SENDER_FROM'),
    ],
    'inbox' => [
        'driver' => 'imap',
        'host' => env('MAIL_INBOX_HOST'),
        'port' => env('MAIL_INBOX_PORT', 993),
        'username' => env('MAIL_INBOX_USERNAME'),
        'password' => env('MAIL_INBOX_PASSWORD'),
    ]
];
