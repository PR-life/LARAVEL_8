<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Task;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\OOGWAY\StoreRequest;
//
use App\Models\Task;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();

        $task = Task::create($data);

		return redirect()->route('admin.oogway.task.index');
    }
}