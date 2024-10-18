<?php

namespace App\Http\Controllers\ADMIN\Item;

use App\Models\Item;
use App\Models\_child\Service;
use App\Models\{Group,Tag,Faq,Category,Lego,User};


class EditController extends BaseController
{
    public function __invoke($id){
		

		$item = Item::findOrFail($id);

        $categories = Category::orderBy('order')->get();
        $groups = Group::all();
		$tags = Tag::all();
		$faqs = Faq::all();
		$items = Item::all();
		$Lego = Lego::all();
		$services = Service::all();
		$roles = User::getRoles();

		$tagsStyle = Tag::where('category_id',16)->get();

		// dd($tagsStyle);


	    return view('zADMIN.PAGE.Item.edit', compact('item','groups','tags','faqs','categories','items','Lego','services','roles','tagsStyle'));
    }
}
