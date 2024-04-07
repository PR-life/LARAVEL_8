<?php

namespace App\Http\Controllers\ADMIN\Tag;
////
use App\Http\Requests\ADMIN\Post\FilterRequest;
// use App\Http\Filters\PostFilter;
//
use App\Models\Tag;

class IndexTrashedController extends BaseController
{
    // public function __invoke(FilterRequest $request){
    public function __invoke(){

        // $categories = Category::all();
		// $tags = Tag::all();

        $tags = Tag::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(40);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

            return view('zADMIN.PAGE.Tag.index', compact('tags'));
        // return view('zADMIN.PAGE.Post.indexTrashed', compact('posts','categories','tags','data'));
    }
}