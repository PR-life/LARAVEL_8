<?php

namespace App\Http\Controllers\ADMIN\Detail;

use App\Http\Controllers\Controller;
//
use App\Models\Detail;
use App\Models\{Group,Category,Tag};
use App\Models\_child\Service;


class EditController extends Controller
{
    public function __invoke(Detail $detail){

        // $categories = Category::whereNull('category_id')
        // ->with('childrenCategories')
        // ->orderBy('name', 'asc')->paginate(25);

        $groups = Group::orderBy('order')->get();
        $categories = Category::orderBy('order')->get();
        $tags = Tag::orderBy('order')->get();


        return view('zADMIN.PAGE.Detail.edit', compact('detail','categories','groups','tags'));
    }
}
