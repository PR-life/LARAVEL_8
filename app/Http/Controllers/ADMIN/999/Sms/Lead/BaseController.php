<?php

namespace App\Http\Controllers\ADMIN\Sms\Lead;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Sms\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
