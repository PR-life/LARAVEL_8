<?php

namespace App\Http\Controllers\ADMIN\Lego;

//
use App\Models\Lego;


class DeleteController extends BaseController
{
    public function __invoke(Lego $lego){
        $lego->delete();
        return redirect()->back();
    }
}
