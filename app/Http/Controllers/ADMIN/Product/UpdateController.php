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
		// dd($product);
		$product = $this->service->update($product,$data);

		// dd($paper);

		return back()->with('UpdateController', true);
		// return redirect()->route('admin.post.edit',$post->id);
    }
}
