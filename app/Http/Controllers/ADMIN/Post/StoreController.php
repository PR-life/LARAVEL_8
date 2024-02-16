<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Http\Requests\ADMIN\Post\StoreRequest;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		// dd($request);
		$param = $request->validated(); // не убираем в Service, т.к. это обработка HTTP
		// dd($param);

		$post = $this->service->store($param);
		// $post = Post::firstOrCreate($param);

		

		return redirect()->route('admin.post.edit', $post->id);
    }
}
