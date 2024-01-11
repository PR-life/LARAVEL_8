<?php

namespace App\Http\Controllers\ADMIN\Group;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Group\StoreRequest;
use App\Models\Group;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){		
        $data = $request->validated();
        Group::firstOrCreate($data);
        return redirect()->route('admin.group.index');
    }
}





