<?php

namespace App\Http\Controllers\ADMIN\Customer;
////
// use App\Http\Requests\ADMIN\Faq\FilterRequest;
// use App\Http\Filters\FaqFilter;
//
use App\Models\Face;


class IndexController extends BaseController
{
    public function __invoke(){
    // public function __invoke(FilterRequest $request){

		$data = [];

		// $x = $request->validated();
		// $filter = app()->make(FaqFilter::class, ['queryParams' => array_filter($x)]);

        // $faqs = Faq::filter($filter)->orderBy('created_at', 'DESC')->paginate(25);
		$faces = Face::orderBy('created_at', 'desc')->paginate(25);

        return view('zADMIN.PAGE.Customer.index', compact('faces','data'));
    }
}
