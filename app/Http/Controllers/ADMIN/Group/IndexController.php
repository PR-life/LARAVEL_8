<?php

namespace App\Http\Controllers\ADMIN\Group;

use Illuminate\Http\Request;
use App\Models\Group;

class IndexController extends BaseController
{
    public function __invoke(Request $request){
		
		$groups = Group::orderBy('order', 'asc')->orderBy('created_at', 'desc')->paginate(25);

        $_request = $this->service->_request($request);

        if($_request['shema'] == 'group')
        {
            return view('zADMIN.PAGE.Group.indexGroup', compact('groups','_request'));
        }

        return view('zADMIN.PAGE.Group.index', compact('groups','_request'));

         
    }
}
