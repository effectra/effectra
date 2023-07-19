<?php

use Effectra\Core\Request;

define('Effectra_START', microtime(true));

define("APP_NAME", "Effectra");

require __DIR__.'/../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

$request = Request::fromGlobal();

$response = $app->handle($request);

$app->capture($request,$response);

$app->run($response);
