<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\Category\StoreRequest;
//
use App\Models\Category;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();

        $category = Category::create($data);

		return redirect()->route('admin.category.edit', $category->id);
    }
}