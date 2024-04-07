<?php

namespace App\Http\Controllers\ADMIN\Post;
////
use App\Http\Requests\ADMIN\Post\FilterRequest;
// use App\Http\Filters\PostFilter;
//
use App\Models\Post;
use App\Models\{Category,Tag};

class IndexTrashedController extends BaseController
{
    // public function __invoke(FilterRequest $request){
    public function __invoke(){

        $categories = Category::all();
		$tags = Tag::all();

        $posts = Post::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(40);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

            return view('zADMIN.PAGE.Post.index', compact('posts','categories','tags','data'));
        // return view('zADMIN.PAGE.Post.indexTrashed', compact('posts','categories','tags','data'));
    }
}