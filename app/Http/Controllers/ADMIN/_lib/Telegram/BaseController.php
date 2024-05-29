<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Paper\Service;


class BaseController extends Controller {

    public $service; 

    
    public function __construct(Service $service) {
        $this->service = $service;
    }

    protected function initializeEnvData()
    {
        return [
            'nameRoute' => 'lib.telegram',
        ];
    }
}