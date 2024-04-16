<?php

namespace App\Http\Controllers\ADMIN\Sms;
//
use App\Http\Requests\ADMIN\Sms\FilterRequest;
use App\Http\Filters\SmsFilter;
//
use App\Models\Sms;
use App\Models\{Category,Tag};

class IndexController extends BaseController
{

    public function __invoke(FilterRequest $request){

        $categories = Category::all();
		$tags = Tag::all();

		$x = $request->validated();
		$filter = app()->make(SmsFilter::class, ['queryParams' => array_filter($x)]);
        $sms = Sms::filter($filter)->orderBy('created_at', 'DESC')->paginate(25);


		$_request = $this->service->_request($request);

        return view('zADMIN.PAGE.Sms.index', compact('sms','categories','tags','_request'));
    }
}
