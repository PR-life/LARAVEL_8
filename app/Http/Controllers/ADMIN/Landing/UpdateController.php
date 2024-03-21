<?php

namespace App\Http\Controllers\ADMIN\Landing;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Landing\UpdateRequest;
//
use App\Models\Landing;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Landing $landing){

        $data = $request->validated();


        if($data['canonical'] == '/'){
            unset($data['canonical']);
        };

        $landing = $this->service->update($landing,$data);
    
		return back()->with('UpdateController', true);
    }
}
