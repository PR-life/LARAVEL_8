<?php

namespace App\Http\Controllers\xCatalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use App\Models\{Category,Landing,Item,Post};
 

class IndexController extends Controller
{
    public function __invoke(Request $request){

        $item = Landing::whereSku('catalog')->firstOrFail();

        return view('xAsgrupp.PAGE.catalog.Morda', compact('item'));

    }
}

 