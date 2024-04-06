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
        $tag = $this->service->update($tag,$data);

        return back()->with('UpdateController', true);
    }
}
