<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Models\Category;


class CreateController extends BaseController
{
    public function __invoke(){
		$categories = Category::all();
		return view('zADMIN.PAGE.Faq.create', compact('categories'));
    }
}