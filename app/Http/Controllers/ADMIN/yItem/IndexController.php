<?php

namespace App\Http\Controllers\ADMIN\Item;
//
use App\Http\Requests\ADMIN\Item\FilterRequest;
use App\Http\Filters\ItemFilter;
//
use App\Models\Item;
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
		 
        // dd($x);


        // $items = Item::filter($filter)->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

			if(count($x)) {

				$filter = app()->make(ItemFilter::class, ['queryParams' => array_filter($x)]);
	
				// dd($filter);
				$items = Item::filter($filter)
					->with('childrenItems')
					->orderBy('order', 'asc')
					->orderBy('created_at', 'DESC')
					->paginate(100);
		
				if(!$items->total()) {
		
					$items = Category::filter($filter)
						->orderBy('order', 'asc')
						->orderBy('created_at', 'DESC')
						->paginate(100);
				}
		   } else {
			// dd(111);
				$items = Item::whereNull('item_id')->with('childrenItems')->get();
		   }



// dd($items);







		$roles = User::getRoles();


        $_request = $this->service->_request($request);

        return view('zADMIN.PAGE.Item.index', compact('items','roles','categories','tags','_request','envData'));
    }
}