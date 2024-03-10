<?php

namespace App\Http\Controllers\ADMIN\User;

//
use App\Http\Requests\ADMIN\User\UpdateRequest;
use App\Models\User;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user){

		// dd($request);
        $data = $request->validated();
		// dd($data);
		$user = $this->service->update($user,$data);

		// dd($data);

		return back()->with('UpdateController', true);
		// return redirect()->route('admin.post.edit',$post->id);
    }
}
