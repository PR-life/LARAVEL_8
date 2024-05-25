<?php

namespace App\Http\Controllers\ADMIN\Tag;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        // dd($data);
        $tag = Tag::firstOrCreate($data);

        return redirect()->route('admin.tag.edit', $tag->id);
        // return redirect()->route('admin.tag.index');
    }
}





