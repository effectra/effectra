<?php

return [
    'name'       => appSnakeName() . '_session',
    'expire'=> time() + (24*60*60),
    'flash_name' => appSnakeName() . '_flash',
    'path'=> '',
    'domain'=> '',
    'secure'     => true,
    'httponly'   => true,
    'samesite'   => 'lax',
];
