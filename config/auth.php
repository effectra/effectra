<?php

return [
    'token' => [
        //issued_at
        'issued_at' => time(),
        // expiration_time
        'expirationTime' =>   time() + (60 * 60 * 24 * 31), //valid 1 month,
        // issuer
        'issuer' => '',
        'key' => appSnakeName()
    ],
    
];
