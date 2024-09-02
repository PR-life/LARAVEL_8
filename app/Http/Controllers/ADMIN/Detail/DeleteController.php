<?php

namespace App\Http\Controllers\ADMIN\Detail;

use App\Http\Controllers\Controller;
//
use App\Models\Detail;

class DeleteController extends Controller
{
    public function __invoke(Detail $detail){
        $detail->delete();
        return redirect()->back();
    }
}
