<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Models\Landing;
use App\Models\Group;
use App\Models\Tag;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Landing $landing){
		

		$categories = Category::all();
		$tags = Tag::all();
		$groups = Group::all();

        return view('zADMIN.PAGE.Landing.edit', compact('landing','categories','tags','groups'));
    }
}
