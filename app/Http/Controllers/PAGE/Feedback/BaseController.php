<?php

namespace App\Http\Controllers\PAGE\Feedback;

use App\Http\Controllers\Controller;
//
use App\Services\PAGE\Feedback\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
