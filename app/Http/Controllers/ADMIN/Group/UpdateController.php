<?php

namespace App\Http\Controllers\ADMIN\Group;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Group\UpdateRequest;
use App\Models\Group;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Group $group){

        $data = $request->validated();

        // dd($data);
        $group = $this->service->update($group,$data);
		
        return back()->with('UpdateController', true);
    }
}
