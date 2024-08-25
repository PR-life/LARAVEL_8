<?php

namespace App\Http\Controllers\ADMIN\Feature;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Feature\UpdateRequest;
use App\Models\Feature;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Tag $tag){

        // dd($request);
        $data = $request->validated();
        // dd($data);
        $tag = $this->service->update($tag,$data);

        return back()->with('UpdateController', true);
    }
}
