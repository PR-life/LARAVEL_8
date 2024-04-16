<?php

namespace App\Http\Controllers\ADMIN\User;

use App\Http\Requests\ADMIN\User\StoreRequest;
// use App\Models\Paper;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
		// dd(111);

		$param = $request->validated();
		// dd($param);
		$user = $this->service->store($param);

		return redirect()->route('admin.user.edit', $user->id);
    }
}
