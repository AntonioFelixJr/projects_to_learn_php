<?php

$resolver = new FX\Resolver;

$resolver['PDO'] = function ($r)
{
    return new PDO('mysql:host=localhost;dbname=curso_php_mvc', 'root', 'Teste@12',
     [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
};

return $resolver;