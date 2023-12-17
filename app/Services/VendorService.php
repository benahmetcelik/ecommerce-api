<?php

namespace App\Services;

use App\Models\Vendor;
use App\Services\BaseService;

class VendorService extends BaseService
{
    public function __construct(Vendor $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
