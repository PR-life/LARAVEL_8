<?php

namespace App\Http\Controllers\ADMIN\Post;
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

		$posts = $this->service->posts($request->validated());

        $categories = Category::all();
		$tags = Tag::all();
		$roles = User::getRoles();


		$_request = $this->service->_request($request);
 
        return view('zADMIN.PAGE.Post.index', compact('posts','categories','tags','_request'));

    }
}