<?php

namespace App\Services;

use App\Models\Role;
use App\Services\BaseService;

class RoleService extends BaseService
{
    public function __construct(Role $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
