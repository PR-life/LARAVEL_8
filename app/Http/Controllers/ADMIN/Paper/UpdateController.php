<?php

namespace App\Http\Controllers\ADMIN\Paper;

//
use App\Http\Requests\ADMIN\Paper\UpdateRequest;
use App\Models\Paper;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Paper $paper){

		// dd($request);
        $data = $request->validated();
		// dd($data);
	
		isset($data['category_id']) ? '' : $data['category_id'] = null;
		isset($data['tag_id']) ? '' : $data['tag_id'] = null;
		// $data['category_id'] < 1 ? '' : $data['category_id'] = null;
		// dd($data);

		
		$paper = $this->service->update($paper,$data);

		// dd($paper);

		return back()->with('UpdateController', true);
		// return redirect()->route('admin.post.edit',$post->id);
    }
}
