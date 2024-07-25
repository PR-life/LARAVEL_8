<?php

namespace App\Http\Controllers\ADMIN\Lego;

//
use App\Http\Requests\ADMIN\Lego\UpdateRequest;
use App\Models\Lego;


class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Lego $lego){

        $data = $request->validated();
        $lego = $this->service->update($lego,$data);

		return back()->with('UpdateController', true);
    }
}
