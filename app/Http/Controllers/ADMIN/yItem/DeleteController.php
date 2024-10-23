<?php

namespace App\Http\Controllers\ADMIN\Item;

use App\Models\Item;


class DeleteController extends BaseController
{
    public function __invoke(Item $item){
        $item->delete();
        return redirect()->back();
    }
}
