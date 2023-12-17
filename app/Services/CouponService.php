<?php

namespace App\Services;

use App\Models\Coupon;
use App\Services\BaseService;

class CouponService extends BaseService
{
    public function __construct(Coupon $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
