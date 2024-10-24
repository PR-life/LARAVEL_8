<?php

namespace App\Http\Controllers\ADMIN\Item;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Item\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }

    protected function initializeEnvData()
    {
        return [
            'Model' => 'Item',
        ];
    }
}
