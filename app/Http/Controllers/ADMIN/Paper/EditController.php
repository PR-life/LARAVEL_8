<?php

namespace App\Http\Controllers\ADMIN\Paper;

use App\Models\Paper;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Item;
use App\Models\User;


class EditController extends BaseController
{
    public function __invoke(Paper $paper){
    // public function __invoke($id){
		// dd($id);
		// $data = [];
        // $data['h1'] = 'Контент: пост';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = ['back' => '/admin/posts',];
		
        $categories = Category::all();

        // dd($categories);



		$tags = Tag::all();
		$items = Item::all();
		$roles = User::getRoles();
		// $post = Paper::withTrashed()->where('id', $id)->get();
		// dd($categories);

	    return view('zADMIN.PAGE.Paper.edit', compact('paper','items','categories','tags','roles'));
    }
}
