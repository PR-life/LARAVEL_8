<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;

use App\Models\_child\Telegram;
use App\Models\{Group,Tag,Faq,Category,Item,User};


class EditController extends BaseController
{
    public function __invoke(Telegram $telegram){
		
		$envData = $this->initializeEnvData();
		// $envData['name_28051841'] = 'Новости';

		$paper = $telegram;

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
