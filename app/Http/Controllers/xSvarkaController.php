<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\{Category,Landing,Item,Post};
 

class xSvarkaController extends Controller
{
 
 
    public function gaz(Request $request){
		$item = Category::whereSlug('gaz')->firstOrFail();
        return view('xAsgrupp.PAGE.kovka.Morda', compact('item'));
    }

    
}

