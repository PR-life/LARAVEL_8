<?php

namespace App\Http\Controllers\ADMIN\Lego;

//
use App\Models\Category;


class CreateController extends BaseController
{
    public function __invoke(){
		$categories = Category::all();
		return view('zADMIN.PAGE.Lego.create', compact('categories'));
    }
}