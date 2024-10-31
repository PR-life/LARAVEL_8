<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;

use App\Http\Requests\ADMIN\Category\StoreRequest;
use App\Services\ADMIN\_lib\Collection\Service as Service;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		$var_Collection = new Service();


		$param = $request->validated();

		$collection = $var_Collection->store($param);

		

		return redirect()->route('admin.collection.edit', $collection->id);
    }
}
