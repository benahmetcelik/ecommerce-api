<?php

namespace App\Services;

use App\Models\Refund;
use App\Services\BaseService;

class RefundService extends BaseService
{
    public function __construct(Refund $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
