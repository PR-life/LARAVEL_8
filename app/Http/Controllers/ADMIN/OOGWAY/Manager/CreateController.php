<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Manager;

use App\Http\Controllers\Controller;
//
use App\Models\Oogway;


class CreateController extends Controller
{
    public function __invoke(){
		$data = [];
        // $data['h1'] = 'Новая категория';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = [
		// 	'back' => '/admin/categories',
		// 	// 'back' => url()->previous(),
		// ];

 
		$oogways = Oogway::all();
		
		return view('zADMIN.OOGWAY.PAGE.manager.create', compact('oogways','data'));
    }
}