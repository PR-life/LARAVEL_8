<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Models\Category;
use App\Models\Tag;


class EditController extends Controller
{
    public function __invoke(Category $category){
		
		$data = [];
        
        // $data['h1'] = 'Связи: категория';
		// $data['wrap_h1'] = 'edit';
		// $data['bread'] = ['back' => '/admin/categories',];
		 
		// $categories = Category::all();

        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->orderBy('name', 'asc')->paginate(25);


        $tags = Tag::all();

        // $categories_lvl_2 = collect();

        // foreach($categories as $item_1) {
        //     if($item_1->childrenCategories) {
        //         foreach ($item_1->childrenCategories as $childCategory) {
        //             $categories_lvl_2->push($childCategory);
        //         }
        //     }

        //     // $item_1->childrenCategories ? $categories_lvl_2->push($item) : '';
        // }


        // @foreach ($category->childrenCategories as $childCategory)
        //     @include('zADMIN.combine.Teaser.category', ['Var' => $childCategory, 'route' => route('admin.category.edit',$childCategory->id)])
        // @endforeach


        return view('zADMIN.PAGE.Category.edit', compact('category','categories','tags','data'));
    }
}
