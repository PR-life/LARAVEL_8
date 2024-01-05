<?php

namespace App\Http\Controllers\ADMIN\Tag;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Tag\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
