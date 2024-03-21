<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Models\Category;
use App\Models\Tag;
use App\Models\Landing;


class EditController extends Controller
{
    public function __invoke(Landing $landing){
		
        // $categories = Category::whereNull('category_id')
        // ->with('childrenCategories')
        // ->orderBy('name', 'asc')->paginate(25);
        // $tags = Tag::all();

        return view('zADMIN.PAGE.Landing.edit', compact('landing'));
    }
}
