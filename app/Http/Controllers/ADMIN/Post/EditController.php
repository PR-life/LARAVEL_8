<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Models\Post;
use App\Models\Group;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Item;


class EditController extends BaseController
{
    public function __invoke($id){
        $post = Post::findOrFail($id);
        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('name', 'asc')->get();

		$tags = Tag::all();
		$groups = Group::all();
		$faqs = Faq::all();
		$items = Item::all();



	    return view('zADMIN.PAGE.Post.edit', compact('post','categories','tags','groups','faqs','items'));
    }
}
