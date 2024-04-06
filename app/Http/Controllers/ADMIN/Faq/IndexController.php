<?php

namespace App\Http\Controllers\ADMIN\Faq;
////
use App\Http\Requests\ADMIN\Faq\FilterRequest;
//
use App\Models\Faq;
use App\Models\{Category,Tag,Group};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){


        $faqs = $this->service->faqs($request->validated());

        $groups = Group::all();
        $tags = Tag::all();
        $categories = Category::all();

        $_request = $this->service->_request($request);


        return view('zADMIN.PAGE.Faq.index', compact('faqs','categories','tags','groups','_request'));
    }
}
