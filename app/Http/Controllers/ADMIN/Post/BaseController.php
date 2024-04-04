<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Post\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }

}
