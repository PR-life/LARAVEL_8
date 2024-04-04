<?php

namespace App\Http\Controllers\ADMIN\Post;
// use App\Http\Controllers\Controller;
////
use App\Http\Requests\ADMIN\Post\FilterRequest;
//
use App\Models\Post;
use App\Models\{User,Category,Tag};

class IndexController extends BaseController {

    public function __invoke(FilterRequest $request){

		// Популярные посты
		// $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
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
		/***/

        $categories = Category::all();
		$tags = Tag::all();

		$posts = $this->service->posts($request->validated());
		$_request = $this->service->_request($request);


		// $_request = [
		// 	'page' => request()->get('page'),
		// 	'tag_id' => request()->get('tag_id'),
		// 	'category_id' => request()->get('category_id'),
		// ];
		// $page = request()->get('page');
		// $tag_id = request()->get('tag_id');
		// $category_id = request()->get('category_id');

		$roles = User::getRoles();


        return view('zADMIN.PAGE.Post.index', compact('posts','categories','tags','_request'));

    }
}