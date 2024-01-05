<?php

namespace App\Http\Controllers\ADMIN\Post;
// use Illuminate\Http\Request;
//
use App\Http\Requests\ADMIN\Post\UpdateRequest;
use App\Models\Post;


class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Post $post){

		// dd($request);
        // $data = [
        //     'email' => $request->input('email'),
        // ];


		// dd($request);
        $data = $request->validated();
		// dd($data);
		
		$post = $this->service->update($post,$data);

		// dd($data);

		return back()->with('UpdateController', true);
		// return redirect()->route('admin.post.edit',$post->id);
    }
}
