<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Landing\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
