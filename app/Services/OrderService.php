<?php

namespace App\Services;

use App\Models\Order;
use App\Services\BaseService;

class OrderService extends BaseService
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
