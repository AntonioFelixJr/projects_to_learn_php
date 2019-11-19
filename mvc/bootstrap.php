<?php

require_once __DIR__ . '/vendor/autoload.php';
$router = require_once __DIR__ . '/router.php';

$object = $router->handler();

$controller = new $object['class'];
$action = $object['action'];
echo $controller->$action();

