<?php

namespace App\Http\Controllers\ADMIN\Product;

use App\Models\Product;


class DeleteController extends BaseController
{
    public function __invoke(Product $item){
        $item->delete();
        return redirect()->back();
    }
}
