<?php

namespace App\Http\Controllers\ADMIN\Customer;

//
use App\Models\Face;
use App\Models\Category;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Face $customer){
		
		$data = [];
		 
		$categories = Category::all();
		$tags = Tag::all();

        // $faces = Face::all();
        // dd($face);

        
 
        return view('zADMIN.PAGE.Customer.edit', compact('customer','categories','tags','data'));
    }
}
