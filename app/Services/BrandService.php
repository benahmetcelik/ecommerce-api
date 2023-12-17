<?php

namespace App\Services;

use App\Models\Brand;
use App\Services\BaseService;

class BrandService extends BaseService
{
    public function __construct(Brand $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
