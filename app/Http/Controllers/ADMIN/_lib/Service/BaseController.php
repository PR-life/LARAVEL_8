<?php

namespace App\Http\Controllers\ADMIN\_lib\Service;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\_lib\Service\ServiceClass;


class BaseController extends Controller {

    public $service; 

    
    public function __construct(ServiceClass $service) {
        $this->service = $service;
    }

    protected function initializeEnvData()
    {
        return [
            'nameRoute' => 'lib.service',
        ];
    }
}