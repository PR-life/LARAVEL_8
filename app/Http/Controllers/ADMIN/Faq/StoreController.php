<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Http\Requests\ADMIN\Faq\StoreRequest;
use App\Models\Faq;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        $faq = Faq::create($data);

		return redirect()->route('admin.faq.edit', $faq->id);
    }
}