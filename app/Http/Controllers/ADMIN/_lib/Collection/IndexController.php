<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;
//
use App\Http\Requests\ADMIN\Paper\FilterRequest;
use App\Http\Filters\PaperFilter;
//
use App\Models\_child\Collection;
use App\Models\{Category,Tag, User};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		$envData = $this->initializeEnvData();
		$envData['name_28051841'] = 'Collection';
		$categoryPivotServices = null;

		//
 
		$param1 = $request->input('type');
		$uri = $request->path();


        $categories = Category::orderBy('order')->get();
		$tags = Tag::orderBy('order')->get();
		$roles = User::getRoles();

		//
		$x = $request->validated();
		$filter = app()->make(PaperFilter::class, ['queryParams' => array_filter($x)]);

        $Collections = Collection::all();
        // $Collections = Collection::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);

		
		
        $_request = $this->service->_request($request);

		if($_request['category_id']) {
			$category = Category::findOrFail($_request['category_id']);
			$categoryPivotServices = $category->pivotServices()->get();
		}


        return view('zADMIN.PAGE.Collection.index', compact('Collections','roles','categories','tags','_request','categoryPivotServices','envData'));
    }
}