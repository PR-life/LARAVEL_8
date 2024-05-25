<?php

namespace App\Http\Controllers\ADMIN\Category;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Category\UpdateRequest;
//
use App\Models\Category;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Category $category){


        $data = $request->validated();
        // dd($data);


        $category = $this->service->update($category,$data);
        
        // $param = $request->validated();
        
		// isset($param['published']) ? '' : $param['published'] = '0';

        // $category->update($param);

		return back()->with('UpdateController', true);
 		// return redirect()->route('admin.category.edit', $category->id);
    }
}
