<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Models\Faq;
use App\Models\{Category,Tag,Group};
 

class EditController extends BaseController
{
    public function __invoke(Faq $faq){
		

		$faqs = Faq::all();
		$categories = Category::all();
		$tags = Tag::all();
		$groups = Group::all();

        return view('zADMIN.PAGE.Faq.edit', compact('faq','faqs','categories','tags','groups'));
    }
}
