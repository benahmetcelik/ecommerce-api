<?php

namespace App\Services;

use App\Models\Permission;
use App\Services\BaseService;

class PermissionService extends BaseService
{
    public function __construct(Permission $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
