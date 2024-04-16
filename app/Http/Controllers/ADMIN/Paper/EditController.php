<?php

namespace App\Http\Controllers\ADMIN\Paper;

use App\Models\Paper;
use App\Models\{Group,Tag,Faq,Category,Item,User};


class EditController extends BaseController
{
    public function __invoke(Paper $paper){
		
        $categories = Category::all();
        $groups = Group::all();
		$tags = Tag::all();
		$faqs = Faq::all();
		$items = Item::all();
		$roles = User::getRoles();


	    return view('zADMIN.PAGE.Paper.edit', compact('paper','groups','tags','faqs','categories','items','roles'));
    }
}
