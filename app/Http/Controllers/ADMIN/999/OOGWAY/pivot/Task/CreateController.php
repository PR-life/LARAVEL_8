<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\pivot\Task;

use App\Http\Controllers\Controller;
//
use App\Models\TaskTask;


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

 
 
	
		return view('zADMIN.OOGWAY.PAGE.PIVOT.Task.create', compact('data'));
    }
}