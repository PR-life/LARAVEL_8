<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;

//
use App\Http\Requests\ADMIN\Paper\UpdateRequest;
use App\Models\_child\Telegram;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Telegram $telegram){

		// dd($request);
        $data = $request->validated();	

		// dd($data);

		$this->service->update($telegram,$data);

		// dd($data);

		return back()->with('UpdateController', true);
		// return redirect()->route('admin.post.edit',$post->id);
    }
}
