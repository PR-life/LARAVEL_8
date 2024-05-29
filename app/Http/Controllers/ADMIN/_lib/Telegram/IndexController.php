<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;
//
use App\Http\Requests\ADMIN\Paper\FilterRequest;
use App\Http\Filters\PaperFilter;
//
use App\Models\_child\Telegram;
use App\Models\{Category,Tag, User};


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

		$envData = $this->initializeEnvData();
		$envData['name_28051841'] = 'Новости';


		//
 
		$param1 = $request->input('type');
		$uri = $request->path();


        $categories = Category::orderBy('order')->get();
		$tags = Tag::orderBy('order')->get();
		$roles = User::getRoles();

		//
		$x = $request->validated();
		$filter = app()->make(PaperFilter::class, ['queryParams' => array_filter($x)]);

        $papers = Telegram::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);

		
		
        $_request = $this->service->_request($request);


        return view('zADMIN.PAGE.Paper.index', compact('papers','roles','categories','tags','_request','envData'));
    }
}