<?php

namespace App\Http\Controllers\ADMIN\OOGWAY;

use App\Http\Controllers\Controller;
//
use App\Models\Oogway;


class ShowController extends Controller
{
    public function __invoke(Oogway $oogway){
		
		$data = [];
        
        return view('zADMIN.OOGWAY.show', compact('oogway','data'));
    }
}
