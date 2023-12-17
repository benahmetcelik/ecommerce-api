<?php

namespace App\Services;

use App\Models\Comment;
use App\Services\BaseService;

class CommentService extends BaseService
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
