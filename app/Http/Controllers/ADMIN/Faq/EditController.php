<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Models\Faq;
use App\Models\{Category,Tag,Group};
 

class EditController extends BaseController
{
    public function __invoke(Faq $faq){
		

		$faqs = Faq::orderBy('order')->get();
		$categories = Category::orderBy('order')->get();
		$tags = Tag::orderBy('order')->get();
		$groups = Group::orderBy('order')->get();

        return view('zADMIN.PAGE.Faq.edit', compact('faq','faqs','categories','tags','groups'));
    }
}
