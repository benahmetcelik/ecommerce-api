<?php

namespace App\Services;

use App\Models\Payment;
use App\Services\BaseService;

class PaymentService extends BaseService
{
    public function __construct(Payment $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
