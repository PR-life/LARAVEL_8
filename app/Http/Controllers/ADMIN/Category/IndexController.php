<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke(){
		$data = [];
        $data['h1'] = 'Категории';
		$data['slug'] = 'categories';

		// $categories = Category::all()->get()->paginate(25);
        // $categories = Category::all();

        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('order', 'asc')
        ->orderBy('name', 'asc')->paginate(25);

        // dd($categories);

        return view('zADMIN.PAGE.Category.index', compact('categories','data'));
    }
}
