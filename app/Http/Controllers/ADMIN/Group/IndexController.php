<?php

namespace App\Http\Controllers\ADMIN\Group;

//
use App\Http\Requests\ADMIN\Group\FilterRequest;
//
// use App\Models\Group;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){
		
        $groups = $this->service->groups($request->validated());

        $_request = $this->service->_request($request);

        if($_request['schema'] == 'group')
        {
            return view('zADMIN.PAGE.Group.indexGroup', compact('groups','_request'));
        }

        return view('zADMIN.PAGE.Group.index', compact('groups','_request'));

         
    }
}
