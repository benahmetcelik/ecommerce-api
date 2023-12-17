<?php

namespace App\Services;

use App\Models\Product;
use App\Services\BaseService;

class ProductService extends BaseService
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
