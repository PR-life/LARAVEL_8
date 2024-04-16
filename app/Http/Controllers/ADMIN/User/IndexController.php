<?php

namespace App\Http\Controllers\ADMIN\User;

use App\Models\User;


class IndexController extends BaseController
{
    public function __invoke(){

		$users = User::orderBy('order', 'DESC')->orderBy('created_at', 'DESC')->paginate(25);
		$roles = User::getRoles();

        return view('zADMIN.PAGE.User.index', compact('users','roles'));
    }
}