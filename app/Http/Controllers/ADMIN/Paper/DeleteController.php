<?php

namespace App\Http\Controllers\ADMIN\Paper;

use App\Models\Paper;


class DeleteController extends BaseController
{
    public function __invoke(Paper $paper){
        $paper->delete();
        return redirect()->back();
    }
}
