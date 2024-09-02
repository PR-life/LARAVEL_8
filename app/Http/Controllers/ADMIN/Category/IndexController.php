<?php

namespace App\Http\Controllers\ADMIN\Category;
// use App\Http\Controllers\Controller;
////
use App\Http\Requests\ADMIN\Category\FilterRequest;
use App\Http\Filters\CategoryFilter;
//
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		$x = $request->validated();

        if(count($x)) {

            $filter = app()->make(CategoryFilter::class, ['queryParams' => array_filter($x)]);

            // dd($filter);
            $Categories = Category::filter($filter)
                ->whereNull('category_id')
                ->with('childrenCategories')
                ->orderBy('order', 'asc')
                ->orderBy('created_at', 'DESC')
                ->paginate(100);
    
            if(!$Categories->total()) {
    
                $Categories = Category::filter($filter)
                    ->orderBy('order', 'asc')
                    ->orderBy('created_at', 'DESC')
                    ->paginate(100);
            }
       } else {
        // dd(111);
            $Categories = Category::whereNull('category_id')
                ->with('childrenCategories')
                ->orderBy('order', 'asc')
                ->orderBy('created_at', 'DESC')
                ->get();
       }

 

        // if($name || $tag_id || $category_id) {
        //     $Categories = Category::filter($filter)->orderBy('order', 'asc')->orderBy('name', 'asc')->paginate(100);
        // } else {
        //     $Categories = Category::filter($filter)->whereNull('category_id')->orderBy('order', 'asc')->orderBy('name', 'asc')->paginate(25);
        // }
        $categories = $this->getCategories();

        $_request = $this->service->_request($request);
        
        return view('zADMIN.PAGE.Category.index', compact('Categories','categories','_request'));
    }
}
