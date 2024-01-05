<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Task;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Sms\UpdateRequest;
//
use App\Models\Task;


class UpdateController extends Controller
{
    // public function __invoke(Sms $sms){
    public function __invoke(UpdateRequest $request, Task $task){

		$data = [];

    $data = $request->validated();

    isset($param['published']) ? '' : $param['published'] = '0';
    // 	// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
    

    
    //
    $task->update($data);


		return back()->with('UpdateController', true);
    }
}
