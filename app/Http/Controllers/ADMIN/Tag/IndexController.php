<?php

namespace App\Http\Controllers\ADMIN\Tag;

//
use App\Http\Requests\ADMIN\Group\FilterRequest;
//
use App\Models\Category;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){
		
		$tags = $this->service->tags($request->validated());
 

        $_request = $this->service->_request($request);


        if($_request['schema'] == 'group')
        {
            return view('zADMIN.PAGE.Tag.indexGroup', compact('tags','categories','schema'));
        }

        // $categories = Category::orderBy('order')->get();

        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->orderBy('order', 'asc')
            ->orderBy('created_at', 'DESC')->get();


        return view('zADMIN.PAGE.Tag.index', compact('tags','categories','_request'));
    }
}
