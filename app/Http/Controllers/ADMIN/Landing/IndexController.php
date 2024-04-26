<?php

namespace App\Http\Controllers\ADMIN\Landing;

use App\Http\Requests\ADMIN\Landing\FilterRequest;
//
use App\Models\Landing;
use App\Models\{Category,Tag};

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

        $landings = Landing::orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(100);

        $categories = Category::all();
		$tags = Tag::all();

        $_request = $this->service->_request($request);

        return view('zADMIN.PAGE.Landing.index', compact('landings','categories','tags','_request'));
    }
}
