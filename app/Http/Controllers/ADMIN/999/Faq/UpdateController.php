<?php

namespace App\Http\Controllers\ADMIN\Faq;
// use Illuminate\Http\Request;
//
use App\Http\Requests\ADMIN\Faq\UpdateRequest;
//
use App\Models\Faq;


class UpdateController extends BaseController
{

    // public function __invoke(Request $request, Faq $faq){
    public function __invoke(UpdateRequest $request, Faq $faq){

        // dd($request);

		// $data = [];
        // $data['h1'] = 'Категория';

        $data = $request->validated();

        // dd($data);

        $faq = $this->service->update($faq,$data);

        // dd($data);

		return back()->with('UpdateController', true);
 		// return redirect()->route('admin.category.edit', $category->id);
    }
}
