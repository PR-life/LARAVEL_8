<?php

namespace App\Http\Controllers\ADMIN\Post;
////
use App\Http\Requests\ADMIN\Post\FilterRequest;
use App\Http\Filters\PostFilter;
//
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		// $param1 = $request->input('type');
		// $uri = $request->path();
		// $tret->fullUrlWithQuery(['type' => 'phone']);

		// dd($uri);
		// dd($request->fullUrlWithQuery(['type' => 'phone']));
		/***/

		$data = [
			'slug' => 'posts',
		];

        $categories = Category::all();
		$tags = Tag::all();

		$x = $request->validated();
		$filter = app()->make(PostFilter::class, ['queryParams' => array_filter($x)]);

        // dd($filter);


        $posts = Post::filter($filter)->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

        return view('zADMIN.PAGE.Post.index', compact('posts','categories','tags','data'));

    }
}