<?php

$router = new FX\Router;

$router['/'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'index'
];

$router['/cadastrar'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'create'
];

$router['/produtos'] = [
    'class' => App\Controllers\ProductsController::class,
    'action' => 'index'
];

return $router;
