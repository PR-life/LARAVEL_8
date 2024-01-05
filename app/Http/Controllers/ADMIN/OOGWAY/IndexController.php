<?php

namespace App\Http\Controllers\ADMIN\OOGWAY;
//
use App\Http\Controllers\Controller;
////
use App\Models\Oogway;

class IndexController extends Controller
{
    public function __invoke(){


        return view('zADMIN.OOGWAY.Morda');
    }
}
