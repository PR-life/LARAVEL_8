<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;

//
use App\Models\Face;


class DeleteController extends BaseController
{
    public function __invoke(Face $face){
        $face->delete();
        return redirect()->back();
    }
}
