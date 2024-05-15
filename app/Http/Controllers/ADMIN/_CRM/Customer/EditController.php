<?php

namespace App\Http\Controllers\ADMIN\_CRM\Customer;

//
use App\Models\Face;
use App\Models\Category;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Face $face){
		
		$categories = Category::all();
		$tags = Tag::all();
		$faces = Face::where('category_id', '!=', '3')
            ->orWhereNull('category_id')
            ->get();

        return view('zADMIN.PAGE.zCRM.Customer.edit', compact('face','faces','categories','tags'));
    }
}
