<?php

namespace App\Http\Controllers\ADMIN\Product;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Product\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }

    protected function initializeEnvData()
    {
        return [
            'Model' => 'Product',
        ];
    }
}
