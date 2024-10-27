<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\_lib\Collection\Service;

class BaseController extends Controller {

    public $service; 

    
    public function __construct(Service $service) {
        $this->service = $service;
    }

    protected function initializeEnvData()
    {
        return [
            'Model' => 'Collection',
            'nameRoute' => 'collection',
        ];
    }
}