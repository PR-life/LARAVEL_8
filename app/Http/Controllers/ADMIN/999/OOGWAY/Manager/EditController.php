<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Manager;

use App\Http\Controllers\Controller;
//
use App\Models\Oogway;


class EditController extends Controller
{
    public function __invoke(Oogway $oogway){
		
		$data = [];
        

        return view('zADMIN.OOGWAY.PAGE.manager.edit', compact('oogway','data'));
    }
}
