<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;

//
use App\Http\Requests\ADMIN\Face\UpdateRequest;
//
use App\Models\Face;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Face $face){

        // dd($request);
        $data = $request->validated();
        // dd($data);
        $face = $this->service->update($face,$data);

		return back()->with('UpdateController', true);
    }
}
