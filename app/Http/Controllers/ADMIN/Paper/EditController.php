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
		
        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('name', 'asc')->paginate(25);

        // dd($categories);


        $categories_lvl_2 = collect();

        foreach($categories as $item_1) {
            if($item_1->childrenCategories) {
                foreach ($item_1->childrenCategories as $childCategory) {
                    $categories_lvl_2->push($childCategory);
                }
            }
            // $item_1->childrenCategories ? $categories_lvl_2->push($item) : '';
        }

		$tags = Tag::all();
		$items = Item::all();
		$roles = User::getRoles();
		// $post = Paper::withTrashed()->where('id', $id)->get();
		// dd($categories);

	    return view('zADMIN.PAGE.Paper.edit', compact('paper','items','categories','categories_lvl_2','tags','roles'));
    }
}
