<?php

namespace App\Http\Controllers\ADMIN\CRM\Face;

//
use App\Models\Face;
use App\Models\Category;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Face $face){
		
		$categories = Category::all();
		$tags = Tag::all();
		$faces = Face::where('category_id', '!=', '3')
            ->orWhereNull('category_id')
            ->get();

        return view('zADMIN.PAGE.Face.edit', compact('face','faces','categories','tags'));
    }
}
