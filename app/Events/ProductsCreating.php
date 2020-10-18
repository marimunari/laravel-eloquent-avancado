<?php

namespace App\Events;

use App\Product;

class ProductsCreating
{
    public $model;
    public $info = 'Creating';

    public function __construct()
    {
        $this->model = $model;
    }
}
