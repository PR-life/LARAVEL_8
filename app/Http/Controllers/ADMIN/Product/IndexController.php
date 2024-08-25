<?php

namespace App\Http\Controllers\ADMIN\Product;
//
use App\Http\Requests\ADMIN\Item\FilterRequest;
use App\Http\Filters\ItemFilter;
//
use App\Models\Product;
use App\Models\{Category,Tag, User};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		$envData = $this->initializeEnvData();

		//
 
		$param1 = $request->input('type');
		$uri = $request->path();


        $categories = Category::orderBy('order')->get();
		$tags = Tag::orderBy('order')->get();

		$x = $request->validated();
		$filter = app()->make(ItemFilter::class, ['queryParams' => array_filter($x)]);
        // dd($filter);


        $products = Product::filter($filter)->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

		$roles = User::getRoles();


        $_request = $this->service->_request($request);

        return view('zADMIN.PAGE.Product.index', compact('products','roles','categories','tags','_request','envData'));
    }
}