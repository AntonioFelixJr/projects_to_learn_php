<?php

namespace App\Controllers;

use FX\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $this->render();
    }
}
