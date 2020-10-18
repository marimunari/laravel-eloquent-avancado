<?php

namespace App\Events;

use App\Product;

class ProductsCreated
{
    public $model;
    public $info = 'Created';

    public function __construct(Product $model)
    {
        $this->model = $model;
    }
}
