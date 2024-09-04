<?php

namespace App\Http\Controllers\ADMIN\Feature;

//
use App\Http\Requests\ADMIN\Feature\FilterRequest;
//
use App\Models\Category;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){
		
		$features = $this->service->features($request->validated());
 

        $_request = $this->service->_request($request);


        if($_request['shema'] == 'group')
        {
            return view('zADMIN.PAGE.Feature.indexGroup', compact('features','categories','shema'));
        }

        $categories = Category::orderBy('order')->get();

        return view('zADMIN.PAGE.Feature.index', compact('features','categories','_request'));

         
    }
}
