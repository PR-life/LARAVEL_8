<?php

namespace App\Http\Controllers\ADMIN\_lib\Service;

use App\Models\_child\Service;
use App\Models\{Group,Tag,Faq,Category,Item,User};


class EditController extends BaseController
{

	public function __invoke($id){
		$service = Service::findOrFail($id);
		$envData = $this->initializeEnvData();
		// $envData['name_28051841'] = 'Новости';

		$paper = $service;
		//
        $categories = Category::orderBy('order')->get();
        $groups = Group::all();
		$tags = Tag::all();
		$faqs = Faq::all();
		$items = Item::all();
		$roles = User::getRoles();

		


	    return view('zADMIN.PAGE.Paper.edit', compact('paper','groups','tags','faqs','categories','items','roles','envData'));
    }
}
