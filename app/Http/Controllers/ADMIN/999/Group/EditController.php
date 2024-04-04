<?php

namespace App\Http\Controllers\ADMIN\Group;

use App\Http\Controllers\Controller;
//
use App\Models\Group;

class EditController extends Controller
{
    public function __invoke(Group $group){

        return view('zADMIN.PAGE.Group.edit', compact('group'));
    }
}
