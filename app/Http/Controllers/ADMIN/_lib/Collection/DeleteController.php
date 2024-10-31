<?php

namespace App\Http\Controllers\ADMIN\_lib\Collection;

use App\Models\_child\Collection;


class DeleteController extends BaseController
{
    public function __invoke(Collection $collection){
        $collection->delete();
        return redirect()->back();
    }
}
