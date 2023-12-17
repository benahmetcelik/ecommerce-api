<?php

namespace App\Services;

use App\Models\FAQ;
use App\Services\BaseService;

class FAQService extends BaseService
{
    public function __construct(FAQ $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
