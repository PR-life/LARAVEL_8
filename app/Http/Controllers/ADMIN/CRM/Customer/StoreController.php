<?php

namespace App\Http\Controllers\ADMIN\CRM\Customer;

////
use App\Http\Requests\ADMIN\Face\StoreRequest;
use App\Models\Face;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        $face = Face::create($data);

		return redirect()->route('admin.crm.customer.edit', $face->id);
    }
}