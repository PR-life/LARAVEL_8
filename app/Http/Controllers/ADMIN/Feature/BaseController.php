<?php

namespace App\Http\Controllers\ADMIN\Feature;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Feature\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
