<?php

namespace App\Http\Controllers\ADMIN\Customer;

//
use App\Http\Requests\ADMIN\Faq\UpdateRequest;
//
use App\Models\Faq;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Faq $faq){

		$data = [];
        // $data['h1'] = 'Категория';


        $data = $request->validated();

        $faq = $this->service->update($faq,$data);

        // dd($data);

		return back()->with('UpdateController', true);
 		// return redirect()->route('admin.category.edit', $category->id);
    }
}
