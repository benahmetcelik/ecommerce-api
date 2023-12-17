<?php

namespace App\Services;

use App\Models\Slider;
use App\Services\BaseService;

class SliderService extends BaseService
{
    public function __construct(Slider $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
