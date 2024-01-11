<?php

namespace App\Http\Controllers\ADMIN\Group;

use App\Http\Controllers\Controller;
//
use App\Models\Group;

class IndexController extends Controller
{
    public function __invoke(){
		
		$groups = Group::orderBy('order', 'asc')->orderBy('created_at', 'desc')->paginate(25);

        $shema = request()->get('shema');
        $page = request()->get('page');

        if($shema == 'group')
        {
            return view('zADMIN.PAGE.Group.indexGroup', compact('groups','shema'));
        }

        return view('zADMIN.PAGE.Group.index', compact('groups','shema','page'));

         
    }
}
