<?php

namespace App\Http\Controllers\ADMIN\Tag;

use App\Http\Controllers\Controller;
//
use App\Models\Tag;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Tag $tag){
		$data = [];


        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('name', 'asc')->paginate(25);

        $tags = Tag::all();

        return view('zADMIN.PAGE.Tag.edit', compact('tag','categories','tags'));
    }
}
