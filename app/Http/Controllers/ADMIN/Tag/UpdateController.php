<?php

namespace App\Http\Controllers\ADMIN\Tag;

// use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Tag $tag){


        $data = $request->validated();

        // dd($data);
        $tag = $this->service->update($tag,$data);

		// $data = [];
        // $param = $request->validated();
        // isset($param['published']) ? '' : $param['published'] = '0';

        // $tag->update($param);
		
        return back()->with('UpdateController', true);
		    // return redirect()->route('admin.tag.edit',$tag->id);
    }
}
