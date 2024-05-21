<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;

//
use App\Models\Face;
use App\Models\Category;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Face $face){
		
		$categories = Category::all();
		$tags = Tag::all();
        $faces = Face::all();
		// $faces = Face::where('category_id', '!=', '3')
        //     ->orWhereNull('category_id')
        //     ->get();

        $link_view_flaber = 'zADMIN.PAGE.Face.lego.edit.right' . config('AS.view_switch');
        // dd($link_view_flaber);
        // config('AS.tg_token');

        return view('zADMIN.PAGE.Face.edit', compact('face','faces','categories','tags'));
    }
}
