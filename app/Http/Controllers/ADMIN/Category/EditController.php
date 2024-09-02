<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Models\Category;
use App\Models\{Tag,Group,Faq,Item};
use App\Models\_child\Service;

class EditController extends BaseController
{
    public function __invoke($id){

        $category = Category::findOrFail($id);

        $categories = $this->getCategories();

        $tags = Tag::all();
        $groups = Group::all();
        $faqs = Faq::all();
        $items = Item::all();
        $services = Service::all();


        return view('zADMIN.PAGE.Category.edit', compact('category','categories','tags','faqs','groups','items','services'));
    }
}
