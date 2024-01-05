<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Models\Landing;

class IndexController extends Controller
{
    public function __invoke(){
		$data = [];

		// $categories = Category::orderBy('created_at', 'desc')->paginate(25);

        $landings = Landing::orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);


        return view('zADMIN.PAGE.Landing.index', compact('landings'));
    }
}
