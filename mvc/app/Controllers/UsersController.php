<?php

namespace App\Controllers;

use FX\Controller;
use App\Models\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = $this->model->all();
        //$this->render($users);
        $this->render(['users' => $users]);
    }

    public function create()
    {
        return '<h1>Página de Criação de usuários.</h1>';
    }
}
