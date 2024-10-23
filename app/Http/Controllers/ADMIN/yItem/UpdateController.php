<?php

namespace App\Http\Controllers\ADMIN\Item;

//
use App\Http\Requests\ADMIN\Item\UpdateRequest;
use App\Models\Item;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Item $item){

		// dd($request);
        $data = $request->validated();	
		// dd($data);
		$item = $this->service->update($item,$data);

		// dd($paper);

		return back()->with('UpdateController', true);
		// return redirect()->route('admin.post.edit',$post->id);
    }
}
