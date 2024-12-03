<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Telegram\Service;


class BaseController extends Controller {

    public $service; 

    
    public function __construct(Service $service) {
        $this->service = $service;
    }

    protected function initializeEnvData()
    {
        return [
            'Model' => 'Telegram',
            'nameRoute' => 'telegram',
        ];
    }
}