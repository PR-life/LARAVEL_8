<?php

namespace App\Http\Controllers\ADMIN\Detail;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Detail\StoreRequest;
use App\Models\Detail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        // dd($data);
        $detail = Detail::firstOrFail($data);

        return redirect()->route('admin.detail.edit', $detail->id);
    }
}





