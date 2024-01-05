<?php

namespace App\Http\Controllers\MY;
use App\Http\Controllers\Controller;

// use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function morda() {

        $roles = User::getRoles();
        // dd($roles);
        return view('zMY.Morda', compact('roles'));
    }

    public function blank() {
        return view('zMY.PAGE.blank');
    }
}

