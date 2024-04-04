<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\pivot\Task;

use App\Http\Controllers\Controller;
//
use Illuminate\Http\Request;
// use App\Http\Requests\ADMIN\OOGWAY\StoreRequest;
//
use App\Models\TaskTask;


class StoreController extends Controller
{
    public function __invoke(Request $request){

        $item = [
            'task_id' => $request->input('task_id'),
            'tasks_id' => $request->input('tasks_id')
        ];

        // dd($item);

        TaskTask::create($item);

		return redirect()->route('admin.oogway.pivot.task.index');
    }
}