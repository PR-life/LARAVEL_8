<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


class EditController extends BaseController
{
    public function __invoke(Post $post){
    // public function __invoke($id){
		// dd($id);
		$data = [];
        // $data['h1'] = 'Контент: пост';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = ['back' => '/admin/posts',];
		
		// $categories = Category::all();
        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('name', 'asc')->paginate(25);
		$tags = Tag::all();
		// $post = Post::withTrashed()->where('id', $id)->get();
		// dd($post);

		// $categoriesChild = Category::where('category_id', '!=', null);

		// dd($categoriesChild);

	    return view('zADMIN.PAGE.Post.edit', compact('post','categories','tags','data'));
    }
}
