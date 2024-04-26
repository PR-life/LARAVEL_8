<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Landing\StoreRequest;
//
use App\Models\Landing;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        $landing = Landing::create($data);

		return redirect()->route('admin.landing.edit', $landing->id);
    }
}