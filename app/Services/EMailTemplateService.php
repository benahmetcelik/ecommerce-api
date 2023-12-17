<?php

namespace App\Services;

use App\Models\EMailTemplate;
use App\Services\BaseService;

class EMailTemplateService extends BaseService
{
    public function __construct(EMailTemplate $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
