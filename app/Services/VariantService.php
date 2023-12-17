<?php

namespace App\Services;

use App\Models\Variant;
use App\Services\BaseService;

class VariantService extends BaseService
{
    public function __construct(Variant $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
