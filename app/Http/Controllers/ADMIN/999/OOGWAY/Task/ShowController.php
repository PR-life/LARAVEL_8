<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Task;

use App\Http\Controllers\Controller;
//
use App\Models\Task;


class ShowController extends Controller
{
    public function __invoke(Task $task){
		
		$data = [];
        
        return view('zADMIN.OOGWAY.PAGE.Task.show', compact('task','data'));
    }
}
