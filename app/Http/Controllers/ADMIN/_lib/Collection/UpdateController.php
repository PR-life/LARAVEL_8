<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;

//
use App\Http\Requests\ADMIN\Category\UpdateRequest;
use App\Models\_child\Collection;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Collection $collection){

        $data = $request->validated();	

        // dd($data);

		$this->service->update($collection,$data);

		return back()->with('UpdateController', true);
    }
}
