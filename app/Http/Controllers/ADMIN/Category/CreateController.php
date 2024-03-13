<?php

namespace App\Http\Controllers\ADMIN\Category;

class CreateController extends BaseController
{
    public function __invoke(){

		return view('zADMIN.PAGE.Category.create');
    }
}