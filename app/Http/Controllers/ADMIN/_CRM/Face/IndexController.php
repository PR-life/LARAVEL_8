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

        $sort = $request->get('sort');

        if ($sort === 'date') {
            $x1607 = 'created_at';
            $xorder = 'desc';
        } elseif ($sort === 'surname') {
            $x1607 = 'surname';
            $xorder = 'asc';
        } else {
            $x1607 = 'surname';
            $xorder = 'asc';
        }

        $groups = Group::all();
        $categories = Category::all();
		$tags = Tag::all();
		$Crm = Crm::all();

		$x = $request->validated();
		$filter = app()->make(FaceFilter::class, ['queryParams' => array_filter($x)]);
        // dd($filter);


        $faces = Face::filter($filter)->orderBy($x1607, $xorder)->orderBy('order', 'asc')->paginate(25);


        return view('zADMIN.PAGE.Face.index', compact('faces'));
    }
}