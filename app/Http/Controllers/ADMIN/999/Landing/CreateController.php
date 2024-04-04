<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke(){
		return view('zADMIN.PAGE.Landing.create');
    }
}