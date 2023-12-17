<?php

namespace App\Services;

use App\Models\Tax;
use App\Services\BaseService;

class TaxService extends BaseService
{
    public function __construct(Tax $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
