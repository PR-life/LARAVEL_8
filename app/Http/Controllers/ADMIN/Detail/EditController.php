<?php

namespace App\Http\Controllers\ADMIN\Detail;

use App\Http\Controllers\Controller;
//
use App\Models\Detail;
use App\Models\{Category,Group};
use App\Models\_child\Service;


class EditController extends Controller
{
    public function __invoke(Detail $detail){

        // $categories = Category::whereNull('category_id')
        // ->with('childrenCategories')
        // ->orderBy('name', 'asc')->paginate(25);

        // $tags = Tag::all();
        $categories = Category::all();
        $groups = Group::all();
        $services = Service::all();

        return view('zADMIN.PAGE.Detail.edit', compact('detail','categories','groups','services'));
    }
}
