<?php

namespace App\Services;

use App\Models\Card;
use App\Services\BaseService;

class CardService extends BaseService
{
    public function __construct(Card $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
