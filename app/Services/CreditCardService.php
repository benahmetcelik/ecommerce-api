<?php

namespace App\Services;

use App\Models\CreditCard;
use App\Services\BaseService;

class CreditCardService extends BaseService
{
    public function __construct(CreditCard $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
