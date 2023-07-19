<?php

declare(strict_types=1);

use Effectra\Core\Facades\View;
use Effectra\Router\Route;

return function (Route $router) {

    $router->get('/',function(){
        return View::render('index');
    });
    
};
