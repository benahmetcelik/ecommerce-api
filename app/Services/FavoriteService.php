<?php

namespace App\Services;

use App\Models\Favorite;
use App\Services\BaseService;

class FavoriteService extends BaseService
{
    public function __construct(Favorite $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
