<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Category\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
