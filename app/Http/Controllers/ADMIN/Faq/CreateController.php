<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Models\Category;


class CreateController extends BaseController
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
		return view('zADMIN.PAGE.Faq.create', compact('categories','data'));
    }
}