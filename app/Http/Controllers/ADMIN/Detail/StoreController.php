<?php

namespace App\Http\Controllers\ADMIN\Detail;

use App\Http\Requests\ADMIN\Detail\StoreRequest;
use App\Models\Detail;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        // dd($request);
        $data = $request->validated();
        // dd($data);
        $detail = $this->service->store($data);

        return redirect()->route('admin.detail.edit', $detail->id);
    }
}





