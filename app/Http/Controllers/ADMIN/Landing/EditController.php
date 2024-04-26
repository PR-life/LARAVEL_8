<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Models\Landing;
use App\Models\{Group,Tag,Faq,Category,Item};

class EditController extends Controller
{
    public function __invoke(Landing $landing){
		
        $categories = Category::all();
        $groups = Group::all();
		$tags = Tag::all();
		$faqs = Faq::all();
		$items = Item::all();

        return view('zADMIN.PAGE.Landing.edit', compact('landing','groups','tags','faqs','categories','items'));
    }
}
