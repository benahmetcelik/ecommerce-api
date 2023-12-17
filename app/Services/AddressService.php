<?php

namespace App\Services;

use App\Models\Address;
use App\Services\BaseService;

class AddressService extends BaseService
{
    public function __construct(Address $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
