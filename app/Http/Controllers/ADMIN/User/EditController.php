<?php

namespace App\Http\Controllers\ADMIN\User;

use App\Models\User;


class EditController extends BaseController
{
    public function __invoke(User $user){

		$roles = User::getRoles();

	    return view('zADMIN.PAGE.User.edit', compact('user','roles'));
    }
}
