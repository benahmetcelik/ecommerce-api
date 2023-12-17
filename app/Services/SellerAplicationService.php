<?php

namespace App\Services;

use App\Models\SellerAplication;
use App\Services\BaseService;

class SellerAplicationService extends BaseService
{
    public function __construct(SellerAplication $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
