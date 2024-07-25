<?php

namespace App\Http\Controllers\ADMIN\Lego;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Lego\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
