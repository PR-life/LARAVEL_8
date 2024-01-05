<?php

namespace App\Http\Controllers\ADMIN\Face;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Face\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
