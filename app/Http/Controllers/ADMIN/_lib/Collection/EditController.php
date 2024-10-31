<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;

use App\Models\_child\Collection;
use App\Models\{Group,Tag,Faq,Category,Item,User};


class EditController extends BaseController
{

	public function __invoke($id){
		$collection = Collection::findOrFail($id);
		$envData = $this->initializeEnvData();
		// $envData['name_28051841'] = 'Новости';

		//
        $categories = Category::orderBy('order')->get();
        $groups = Group::all();
		$tags = Tag::all();
		$faqs = Faq::all();
		$items = Item::all();
		$roles = User::getRoles();

		

	    return view('zADMIN.PAGE.Collection.edit', compact('collection','groups','tags','faqs','categories','items','roles','envData'));
    }
}
