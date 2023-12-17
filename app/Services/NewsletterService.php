<?php

namespace App\Services;

use App\Models\Newsletter;
use App\Services\BaseService;

class NewsletterService extends BaseService
{
    public function __construct(Newsletter $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
