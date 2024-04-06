<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke(){

        return view('zADMIN.PAGE.SHERPA.Excel.Morda');
    }
}