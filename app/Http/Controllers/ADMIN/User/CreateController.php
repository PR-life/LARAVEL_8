<?php

namespace App\Http\Controllers\ADMIN\User;

use App\Models\User;

class CreateController extends BaseController
{
    public function __invoke(){

		$roles = User::getRoles();
		
        return view('zADMIN.PAGE.User.create', compact('roles'));
    }
}
