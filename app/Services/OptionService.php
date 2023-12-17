<?php

namespace App\Services;

use App\Models\Option;
use App\Services\BaseService;

class OptionService extends BaseService
{
    public function __construct(Option $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
