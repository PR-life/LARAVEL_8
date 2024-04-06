<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Http\Requests\ADMIN\Faq\UpdateRequest;
use App\Models\Faq;


class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Faq $faq){

        $data = $request->validated();
        $faq = $this->service->update($faq,$data);

		return back()->with('UpdateController', true);
    }
}
