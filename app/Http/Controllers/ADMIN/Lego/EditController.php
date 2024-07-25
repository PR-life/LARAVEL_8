<?php

namespace App\Http\Controllers\ADMIN\Lego;

//
use App\Models\Lego;
use App\Models\{Category,Tag,Group};
 

class EditController extends BaseController
{
    public function __invoke(Lego $lego){
		
		$categories = Category::orderBy('order')->get();
		$tags = Tag::orderBy('order')->get();
		$groups = Group::orderBy('order')->get();

        return view('zADMIN.PAGE.Lego.edit', compact('lego','categories','tags','groups'));
    }
}
