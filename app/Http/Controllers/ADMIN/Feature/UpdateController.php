<?php

namespace App\Http\Controllers\ADMIN\Feature;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Feature\UpdateRequest;
use App\Models\Feature;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Feature $feature){

        // dd($request);
        $data = $request->validated();
        // dd($data);
        $feature = $this->service->update($feature,$data);

        return back()->with('UpdateController', true);
    }
}
