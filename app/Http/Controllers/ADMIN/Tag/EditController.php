<?php

namespace App\Http\Controllers\ADMIN\Tag;

use App\Http\Controllers\Controller;
//
use App\Models\Tag;
use App\Models\{Category,Group};


class EditController extends Controller
{
    public function __invoke(Tag $tag){

        // $categories = Category::whereNull('category_id')
        // ->with('childrenCategories')
        // ->orderBy('name', 'asc')->paginate(25);

        // $tags = Tag::all();
        $categories = Category::all();
        $groups = Group::all();

        return view('zADMIN.PAGE.Tag.edit', compact('tag','categories','groups'));
    }
}
