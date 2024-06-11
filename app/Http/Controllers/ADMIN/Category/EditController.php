<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Models\Category;
use App\Models\{Tag,Group,Faq,Item};
use App\Models\_child\Service;

class EditController extends Controller
{
    public function __invoke(Category $category){

        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('name', 'asc')->paginate(25);
        $tags = Tag::all();
        $groups = Group::all();
        $faqs = Faq::all();
        $items = Item::all();
        $services = Service::all();


        return view('zADMIN.PAGE.Category.edit', compact('category','categories','tags','faqs','groups','items','services'));
    }
}
