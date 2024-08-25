<?php

namespace App\Http\Controllers\ADMIN\Feature;

use App\Http\Controllers\Controller;
//
use App\Models\Feature;
use App\Models\{Category,Group};
use App\Models\_child\Service;


class EditController extends Controller
{
    public function __invoke(Feature $feature){

        // $categories = Category::whereNull('category_id')
        // ->with('childrenCategories')
        // ->orderBy('name', 'asc')->paginate(25);

        // $tags = Tag::all();
        $categories = Category::all();
        $groups = Group::all();
        $services = Service::all();

        return view('zADMIN.PAGE.Tag.edit', compact('feature','categories','groups','services'));
    }
}
