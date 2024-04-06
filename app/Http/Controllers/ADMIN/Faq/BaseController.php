<?php

namespace App\Http\Controllers\ADMIN\Faq;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Faq\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
