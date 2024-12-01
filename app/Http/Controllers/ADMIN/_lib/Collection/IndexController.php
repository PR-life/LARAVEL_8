<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;
//
// use App\Http\Requests\ADMIN\Paper\FilterRequest;
use App\Http\Filters\PaperFilter;
//
use App\Models\_child\Collection;
use App\Models\{Category,Tag, User};


class IndexController extends BaseController
{
    // public function __invoke(FilterRequest $request){
    public function __invoke(){

		$Collections = Collection::whereNull('category_id')
			// ->with('childrenCategories')
			->orderBy('order', 'asc')
			->orderBy('created_at', 'DESC')
			->get();



        return view('zADMIN.PAGE.Collection.index', compact('Collections'));
    }
}