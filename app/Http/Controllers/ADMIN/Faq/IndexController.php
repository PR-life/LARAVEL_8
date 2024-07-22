<?php

namespace App\Http\Controllers\ADMIN\Faq;
////
use App\Http\Requests\ADMIN\Faq\FilterRequest;
//
// use App\Models\Faq;
use App\Models\{Category,Tag,Group};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){


        $faqs = $this->service->faqs($request->validated())->orderBy('created_at', 'DESC')->paginate(25);
        // $faqs = $this->service->faqs($request->validated())->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);

        $groups = Group::all();
        $tags = Tag::all();
        $categories = Category::all();

        $_request = $this->service->_request($request);


        return view('zADMIN.PAGE.Faq.index', compact('faqs','categories','tags','groups','_request'));
    }
}
