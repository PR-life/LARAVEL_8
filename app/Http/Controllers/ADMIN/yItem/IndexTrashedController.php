<?php

namespace App\Http\Controllers\ADMIN\Item;
////
use App\Http\Requests\ADMIN\Paper\FilterRequest;
// use App\Http\Filters\PaperFilter;
//
use App\Models\Paper;
use App\Models\Category;
use App\Models\Tag;


class IndexTrashedController extends BaseController
{
    // public function __invoke(FilterRequest $request){
    public function __invoke(){


        $categories = Category::all();
		$tags = Tag::all();

        $papers = Paper::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(5);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

        return view('zADMIN.PAGE.Paper.index', compact('papers','categories','tags'));
    }
}