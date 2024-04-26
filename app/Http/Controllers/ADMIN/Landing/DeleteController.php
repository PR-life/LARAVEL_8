<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Models\Landing;


class DeleteController extends Controller
{
    public function __invoke(Landing $landing){
        $landing->delete();
        return redirect()->back();
    }
}
