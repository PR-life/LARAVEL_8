<?php

namespace App\Http\Controllers\MY\Form\distributor;
use App\Http\Controllers\Controller;

// use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(){
		$roles = User::getRoles();


        // return view('zADMIN.PAGE.Paper.index', compact('papers','roles','categories','tags','data'));
        return view('zMY.PAGE.Form.distributor', compact('roles'));
    }
}

