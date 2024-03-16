<?php

namespace App\Http\Controllers\ADMIN\Post;
// use App\Http\Controllers\Controller;
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

		// Популярные посты
		$likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);


		// *вывод кол-ва во View
		// *где comments_count считает в Модели [protected $withCount = ['likedUsers','comments'];]
		// <span class="content">{{$postForeach->comments_count}}</span>

		//* тоже кол-во, но Like
		// <span class="content">{{$postForeach->liked_users_count}}</span>



		// !!!!!
		// не разобрался как сохранять свои Лайки 

		// на морде сайта указаны контроллеры в Админ панели
		// Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function(){
		// 	Route::post('/', 'StoreController')->name('post.comment.store');
		// });

		// Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function(){
		// 	Route::post('/', 'StoreController')->name('post.like.store');
		// });













		// $param1 = $request->input('type');
		// $uri = $request->path();
		// $tret->fullUrlWithQuery(['type' => 'phone']);

		// dd($uri);
		// dd($request->fullUrlWithQuery(['type' => 'phone']));
		/***/

		// $data = [
		// 	'slug' => 'posts',
		// ];

        $categories = Category::all();
		$tags = Tag::all();

		$x = $request->validated();
		$filter = app()->make(PostFilter::class, ['queryParams' => array_filter($x)]);

        // dd($filter);


        $posts = Post::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

        return view('zADMIN.PAGE.Post.index', compact('posts','categories','tags'));

    }
}