<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\Post;
use App\Models\{Category,Tag,Group};
 

class xAsgruppController extends Controller
{

	
    public function kovkaVorota(Request $request){
		
		$item = Category::whereSlug('vorota')->firstOrFail();

        return view('xAsgrupp.PAGE.Category', compact('item'));
    }


    public function morda(Request $request){
		
		$item = Post::whereSlug('morda')->firstOrFail();
	
        return view('xAsgrupp.Morda', compact('item'));
    }
}

