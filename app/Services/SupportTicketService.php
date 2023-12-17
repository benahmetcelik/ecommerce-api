<?php

namespace App\Services;

use App\Models\SupportTicket;
use App\Services\BaseService;

class SupportTicketService extends BaseService
{
    public function __construct(SupportTicket $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
