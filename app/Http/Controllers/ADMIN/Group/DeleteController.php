<?php

namespace App\Http\Controllers\ADMIN\Group;

use App\Http\Controllers\Controller;
//
use App\Models\Group;

class DeleteController extends BaseController
{
    public function __invoke(Group $group){
        $group->delete();
        return redirect()->back();
    }
}
