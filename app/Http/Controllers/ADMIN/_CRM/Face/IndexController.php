<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;
//
use App\Http\Requests\ADMIN\Face\FilterRequest;
use App\Http\Filters\FaceFilter;
//
use App\Models\Face;
use App\Models\{Group,Tag, Category};
use App\Models\CRM\Crm;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

        $groups = Group::all();
        $categories = Category::all();
		$tags = Tag::all();
		$Crm = Crm::all();

		$x = $request->validated();
		$filter = app()->make(FaceFilter::class, ['queryParams' => array_filter($x)]);
        // dd($filter);


        $faces = Face::filter($filter)->orderBy('order', 'asc')->orderBy('surname', 'ASC')->paginate(25);


        return view('zADMIN.PAGE.Face.index', compact('faces'));
    }
}