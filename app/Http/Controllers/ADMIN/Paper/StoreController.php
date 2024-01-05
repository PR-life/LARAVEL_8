<?php

namespace App\Http\Controllers\ADMIN\Paper;

use App\Http\Requests\ADMIN\Paper\StoreRequest;
use App\Models\Paper;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		// dd(111);
		$param = $request->validated(); // не убираем в Service, т.к. это обработка HTTP

		$paper = $this->service->store($param);

		

		return redirect()->route('admin.paper.edit', $paper->id);
    }
}
