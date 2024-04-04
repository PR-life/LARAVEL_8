<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Task;

use App\Http\Controllers\Controller;
//
use App\Models\Task;


class EditController extends Controller
{
    public function __invoke(Task $task){
		
		$data = [];
        

        return view('zADMIN.OOGWAY.PAGE.Task.edit', compact('task','data'));
    }
}
