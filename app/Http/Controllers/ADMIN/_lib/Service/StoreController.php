<?php

namespace App\Http\Controllers\ADMIN\_lib\Service;

use App\Http\Requests\ADMIN\Paper\StoreRequest;
use App\Services\ADMIN\_lib\Service\ServiceClass as Service;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		$var_Service = new Service();


		$param = $request->validated();

		$service = $var_Service->store($param);

		

		return redirect()->route('admin.lib.service.edit', $service->id);
    }
}
