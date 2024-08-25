<?php

namespace App\Http\Controllers\ADMIN\Feature;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke(){
		$data = [];
        // $data['h1'] = 'Новый тэг';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = ['back' => '/admin/tags'];

        return view('zADMIN.PAGE.Feature.create', compact('data'));
    }
}
