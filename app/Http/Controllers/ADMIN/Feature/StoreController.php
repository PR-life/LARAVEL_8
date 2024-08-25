<?php

namespace App\Http\Controllers\ADMIN\Feature;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Feature\StoreRequest;
use App\Models\Feature;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        // dd($data);
        $feature = Feature::firstOrCreate($data);

        return redirect()->route('admin.feature.edit', $feature->id);
    }
}





