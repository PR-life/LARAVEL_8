<?php

namespace App\Http\Controllers\ADMIN\Detail;

//
use App\Http\Requests\ADMIN\Detail\FilterRequest;
//
use App\Models\Category;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){
		
		$details = $this->service->details($request->validated());
 

        $_request = $this->service->_request($request);


        if($_request['shema'] == 'group')
        {
            return view('zADMIN.PAGE.Detail.indexGroup', compact('details','categories','shema'));
        }

        $categories = Category::orderBy('order')->get();

        return view('zADMIN.PAGE.Detail.index', compact('details','categories','_request'));

         
    }
}
