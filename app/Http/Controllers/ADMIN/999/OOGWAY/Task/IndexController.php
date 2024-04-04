<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Task;
//
use App\Http\Controllers\Controller;
//
use App\Models\Task;

class IndexController extends Controller
{
    public function __invoke(){

        $data = [];

        $tasks = Task::orderBy('created_at', 'desc')->paginate(25);


        return view('zADMIN.OOGWAY.PAGE.Task.index', compact('tasks','data'));
    }
}