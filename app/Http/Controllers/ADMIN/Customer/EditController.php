<?php

namespace App\Http\Controllers\ADMIN\Customer;

//
use App\Models\Face;
use App\Models\Category;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Face $face){
		
		$categories = Category::all();
		$tags = Tag::all();

        return view('zADMIN.PAGE.Customer.edit', compact('face','categories','tags'));
    }
}
