<?php

namespace App\Services;

use App\Models\Wallet;
use App\Services\BaseService;

class WalletService extends BaseService
{
    public function __construct(Wallet $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
