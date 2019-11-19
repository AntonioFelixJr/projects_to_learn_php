<?php

namespace App\Controllers;

use FX\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return $this->render(['nome' => 'Antonio Felix']);
    }

    public function create()
    {
        return '<h1>Página de Criação de usuários.</h1>';
    }
}
