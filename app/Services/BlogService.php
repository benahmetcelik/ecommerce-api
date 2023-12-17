<?php

namespace App\Services;

use App\Models\Blog;
use App\Services\BaseService;

class BlogService extends BaseService
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
