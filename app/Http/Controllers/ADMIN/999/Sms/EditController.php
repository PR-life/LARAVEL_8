<?php

namespace App\Http\Controllers\ADMIN\Sms;

//
use App\Models\Sms;
use App\Models\Paper;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Group;

class EditController extends BaseController
{
    public function __invoke(Sms $sms){
		
        // $categories = Category::whereNull('category_id')
        // ->with('childrenCategories')
        // ->orderBy('name', 'asc')->paginate(25);

        // $categories_lvl_2 = collect();

        // foreach($categories as $item_1) {
        //     if($item_1->childrenCategories) {
        //         foreach ($item_1->childrenCategories as $childCategory) {
        //             $categories_lvl_2->push($childCategory);
        //         }
        //     }
        // }

		$tags = Tag::all();
		$groups = Group::all();
		$categories = Category::all();

        return view('zADMIN.PAGE.Sms.edit', compact('sms','categories','tags','groups'));
    }
}
