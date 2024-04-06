<?php

namespace App\Http\Controllers\ADMIN\Tag;

use App\Http\Controllers\Controller;
//
use App\Models\Tag;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke(){
		
		$tags = Tag::orderBy('order', 'asc')->orderBy('created_at', 'desc')->paginate(25);
		$categories = Category::all();

        $shema = request()->get('shema');
        $page = request()->get('page');


        // dd($shema);
        // dd(request()->all());
        // dd(request());
        if($shema == 'group')
        {
            return view('zADMIN.PAGE.Tag.indexGroup', compact('tags','categories','shema'));
        }

        return view('zADMIN.PAGE.Tag.index', compact('tags','categories','shema','page'));

         
    }
}
