<?php

namespace App\Http\Controllers\ADMIN\Product;

//
use App\Http\Requests\ADMIN\Product\UpdateRequest;
use App\Models\Product;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $product){

		// dd($request);
        $data = $request->validated();	
		// dd($data);
		$product = $this->service->update($product,$data);

		return back()->with('UpdateController', true);
    }
}
