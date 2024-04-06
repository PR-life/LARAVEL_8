<?php

namespace App\Http\Controllers\ADMIN\Group;

use App\Http\Controllers\Controller;


class CreateController extends BaseController
{
    public function __invoke(){
		$data = [];
        return view('zADMIN.PAGE.Group.create', compact('data'));
    }
}
