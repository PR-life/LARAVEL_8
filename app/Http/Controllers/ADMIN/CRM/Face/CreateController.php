<?php

namespace App\Http\Controllers\ADMIN\CRM\Face;

//
use App\Models\Group;
use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke(){

        $group = Group::whereSku('customers')->firstOrFail();
        $categories = Category::where('group_id', '=', $group->id)->get();

        return view('zADMIN.PAGE.Face.create',compact('categories'));
    }
}
