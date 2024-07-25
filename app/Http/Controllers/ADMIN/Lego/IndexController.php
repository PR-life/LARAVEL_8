<?php

namespace App\Http\Controllers\ADMIN\Lego;
////
use App\Http\Requests\ADMIN\Faq\FilterRequest;
//
// use App\Models\Faq;
use App\Models\{Category,Tag,Group};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){


        $lego = $this->service->lego($request->validated())->orderBy('created_at', 'DESC')->paginate(25);

        $groups = Group::all();
        $tags = Tag::all();
        $categories = Category::all();

        $_request = $this->service->_request($request);


        return view('zADMIN.PAGE.Lego.index', compact('lego','categories','tags','groups','_request'));
    }
}
