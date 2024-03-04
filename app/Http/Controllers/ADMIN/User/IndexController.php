<?php

namespace App\Http\Controllers\ADMIN\User;
////
// use App\Http\Requests\ADMIN\Paper\FilterRequest;
// use App\Http\Filters\PaperFilter;
// //
// use App\Models\Paper;
// use App\Models\Category;
// use App\Models\Tag;
use App\Models\User;


class IndexController extends BaseController
{
    public function __invoke(){



		$users = User::orderBy('created_at', 'DESC')->paginate(25);
		$roles = User::getRoles();

        return view('zADMIN.PAGE.User.index', compact('users','roles'));
    }
}