<?php

namespace App\Http\Controllers\ADMIN\Customer;

//
use App\Models\Group;
use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke(){

        $group = Group::whereSku('customers')->firstOrFail();
        $categories = Category::where('group_id', '=', $group->id)->get();

        return view('zADMIN.PAGE.Customer.create',compact('categories'));
    }
}
