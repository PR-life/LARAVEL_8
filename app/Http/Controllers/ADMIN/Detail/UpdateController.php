<?php

namespace App\Http\Controllers\ADMIN\Detail;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Detail\UpdateRequest;
use App\Models\Detail;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Detail $detail){

        dd($request);
        $data = $request->validated();
        // dd($data);
        $tag = $this->service->update($detail,$data);

        return back()->with('UpdateController', true);
    }
}
