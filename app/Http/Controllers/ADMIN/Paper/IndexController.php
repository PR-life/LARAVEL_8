<?php

namespace App\Http\Controllers\ADMIN\Paper;
//
use App\Http\Requests\ADMIN\Paper\FilterRequest;
use App\Http\Filters\PaperFilter;
//
use App\Models\Paper;
use App\Models\{Category,Tag, User};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		$envData = $this->initializeEnvData();

		//
 
		$param1 = $request->input('type');
		$uri = $request->path();
		// $tret->fullUrlWithQuery(['type' => 'phone']);

		// dd($uri);
		// dd($request->fullUrlWithQuery(['type' => 'phone']));
		/***/

		// $data = [
		// 	'slug' => 'papers',
		// ];

        $categories = Category::orderBy('order')->get();
		$tags = Tag::orderBy('order')->get();

		$x = $request->validated();
		$filter = app()->make(PaperFilter::class, ['queryParams' => array_filter($x)]);
        // dd($filter);


        $papers = Paper::filter($filter)->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

		$roles = User::getRoles();


        $_request = $this->service->_request($request);

        return view('zADMIN.PAGE.Paper.index', compact('papers','roles','categories','tags','_request','envData'));
    }
}