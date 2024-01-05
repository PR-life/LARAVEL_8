<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Http\Requests\ADMIN\Post\StoreRequest;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		// dd(111);
		$param = $request->validated(); // не убираем в Service, т.к. это обработка HTTP

		$post = $this->service->store($param);

		

		return redirect()->route('admin.post.edit', $post->id);
    }
}
