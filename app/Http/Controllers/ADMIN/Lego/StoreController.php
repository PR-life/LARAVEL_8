<?php

namespace App\Http\Controllers\ADMIN\Lego;

//
use App\Http\Requests\ADMIN\Lego\StoreRequest;
use App\Models\Lego;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        $lego = Lego::create($data);

		return redirect()->route('admin.lego.edit', $lego->id);
    }
}