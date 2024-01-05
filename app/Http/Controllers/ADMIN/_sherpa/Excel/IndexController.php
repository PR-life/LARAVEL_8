<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke(){

		$data = [];

        return view('zADMIN.PAGE.sherpa.Excel.Morda', compact('data'));
    }
}

