<?php

namespace App\Http\Controllers\ADMIN\_CRM\Customer;
// use App\Http\Controllers\Controller;
////
use App\Http\Requests\ADMIN\Face\FilterRequest;
use App\Http\Filters\FaceFilter;
//
use App\Models\Face;
use App\Models\Category;
use App\Models\Tag;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		$x = $request->validated();
        // dd($x);
		$filter = app()->make(FaceFilter::class, ['queryParams' => array_filter($x)]);
        // dd($filter);


        $faces = Face::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);
        // $faces = Face::paginate(50);

        $categories = Category::all();
		$tags = Tag::all();

        return view('zADMIN.PAGE.Customer.index', compact('faces','categories','tags'));

    }
}