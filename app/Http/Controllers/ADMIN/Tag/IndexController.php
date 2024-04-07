<?php

namespace App\Http\Controllers\ADMIN\Tag;

//
use App\Http\Requests\ADMIN\Group\FilterRequest;
//
// use App\Models\Tag;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){
		
		$tags = $this->service->tags($request->validated());
 

        $_request = $this->service->_request($request);


        if($_request['shema'] == 'group')
        {
            return view('zADMIN.PAGE.Tag.indexGroup', compact('tags','categories','shema'));
        }

        return view('zADMIN.PAGE.Tag.index', compact('tags','_request'));

         
    }
}
