<?php

use Effectra\Core\Application;
use Effectra\Core\Container\AppContainer;

$path = dirname(__DIR__);

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$appContainer = new AppContainer();

$appContainer->setPath($path);

$appContainer->build();



/** @var \Effectra\Core\Application $app */
$app = $appContainer->get(Application::class);

$app->setAppPath($path);

$app->setContainer($appContainer->container());

return $app;