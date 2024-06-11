<?php

namespace App\Http\Controllers\ADMIN\_lib\Service;

//
use App\Http\Requests\ADMIN\Paper\UpdateRequest;
use App\Models\_child\Service;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Service $service){

        $data = $request->validated();	

        // dd($data);

		$this->service->update($service,$data);

		return back()->with('UpdateController', true);
    }
}
