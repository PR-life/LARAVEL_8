<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Models\Category;


class CreateController extends Controller
{
    public function __invoke(){
		$data = [];
        // $data['h1'] = 'Новая категория';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = [
		// 	'back' => '/admin/categories',
		// 	// 'back' => url()->previous(),
		// ];

		$categories = Category::all();
		return view('zADMIN.PAGE.Category.create', compact('categories','data'));
    }
}