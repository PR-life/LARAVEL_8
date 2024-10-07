<?php

namespace App\Http\Controllers\ADMIN\Product;
//
use App\Http\Requests\ADMIN\Product\FilterRequest;
use App\Http\Filters\ProductFilter;
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

		//
		$x = $request->validated();


		if(count($x)) {
 
			$filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($x)]);
			// dd($filter);
	
			$products = Product::filter($filter)
				->with('childrenProducts')
				->orderBy('order', 'asc')
				->orderBy('created_at', 'DESC')
				->paginate(100);

			// if(!$products->total()) {
		
			// 	$products = Category::filter($filter)
			// 		->orderBy('order', 'asc')
			// 		->orderBy('created_at', 'DESC')
			// 		->paginate(100);
			// }

	   } else {
			$products = Product::whereNull('product_id')->with('childrenProducts')->orderBy('created_at', 'DESC')->get();
	   }



	   //
		$roles = User::getRoles();
        $_request = $this->service->_request($request);

        return view('zADMIN.PAGE.Product.index', compact('products','roles','categories','tags','_request','envData'));
    }
}