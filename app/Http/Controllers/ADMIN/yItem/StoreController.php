<?php

namespace App\Http\Controllers\ADMIN\Item;

use App\Http\Requests\ADMIN\Item\StoreRequest;
use App\Models\Item;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		// dd(111);
		$param = $request->validated(); // не убираем в Service, т.к. это обработка HTTP

		$item = $this->service->store($param);

		

		return redirect()->route('admin.item.edit', $item->id);
    }
}
