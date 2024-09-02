<?php

namespace App\Http\Controllers\ADMIN\Detail;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Detail\Service;
//
use App\Models\Detail;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
