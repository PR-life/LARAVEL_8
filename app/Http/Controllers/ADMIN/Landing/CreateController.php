<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Controllers\Controller;
//
use App\Models\Landing;


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

		// $categories = Category::all();

		return view('zADMIN.PAGE.Landing.create', compact('data'));
    }
}