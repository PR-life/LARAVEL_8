<?php

namespace App\Http\Controllers\ADMIN\User;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\User\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
