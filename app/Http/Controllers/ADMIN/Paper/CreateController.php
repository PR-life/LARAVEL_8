<?php

namespace App\Http\Controllers\ADMIN\Paper;

use App\Models\Category;
use App\Models\Tag;


class CreateController extends BaseController
{
    public function __invoke(){
		$data = [];
        // $data['h1'] = 'Новый контент: пост';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = ['back' => '/admin/posts',];

        // $categories = Category::all();
		// $tags = Tag::all();
		
        return view('zADMIN.PAGE.Paper.create', compact('data'));
    }
}
