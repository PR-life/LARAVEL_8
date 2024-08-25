<?php

namespace App\Http\Controllers\ADMIN\Product;

use App\Http\Requests\ADMIN\Item\StoreRequest;
use App\Models\Product;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		// dd(111);
		$param = $request->validated(); // не убираем в Service, т.к. это обработка HTTP

		$product = $this->service->store($param);

		

		return redirect()->route('admin.product.edit', $product->id);
    }
}
