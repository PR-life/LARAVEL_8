<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\pivot\Task;
//
use App\Http\Controllers\Controller;
//
use App\Models\TaskTask;

class IndexController extends Controller
{
    public function __invoke(){

        $data = [];

        $pivots = TaskTask::orderBy('created_at', 'desc')->paginate(25);


        return view('zADMIN.OOGWAY.PAGE.PIVOT.Task.index', compact('pivots','data'));
    }
}