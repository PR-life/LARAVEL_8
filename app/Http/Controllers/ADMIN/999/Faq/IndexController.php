<?php

namespace App\Http\Controllers\ADMIN\Faq;
////
use App\Http\Requests\ADMIN\Faq\FilterRequest;
use App\Http\Filters\FaqFilter;
//
use App\Models\Faq;
use App\Models\FaqTag;
use App\Models\Tag;
use App\Models\Category;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){



		$x = $request->validated();
		$filter = app()->make(FaqFilter::class, ['queryParams' => array_filter($x)]);
        $paginator = true;
         


        if(request()->get('tag_id')) {
            $tag = Tag::whereId(request()->get('tag_id'))->firstOrFail();
            $faqs = $tag->faqs;
            $paginator = false;

        } else {
            $faqs = Faq::filter($filter)->whereNull('faq_id')->orderBy('created_at', 'DESC')->paginate(80);
        }




        $categories = Category::all();
		// $faq = Faq::orderBy('created_at', 'desc')->paginate(25);


        // $shema = request()->get('shema');
        $page = request()->get('page');
        $tag_id = request()->get('tag_id');
        $category_id = request()->get('category_id');

        $tags = Tag::all();


        return view('zADMIN.PAGE.Faq.index', compact('faqs','categories','tags','paginator','page','tag_id','category_id'));
    }
}
