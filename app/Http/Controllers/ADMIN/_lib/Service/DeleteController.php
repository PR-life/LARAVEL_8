<?php

namespace App\Http\Controllers\ADMIN\_lib\Service;

use App\Models\_child\Service;


class DeleteController extends BaseController
{
    public function __invoke(Service $service){
        $service->delete();
        return redirect()->back();
    }
}
