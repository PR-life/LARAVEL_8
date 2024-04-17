<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Models\Category;
use App\Models\Tag;


class CreateController extends BaseController
{
    public function __invoke(){

        return view('zADMIN.PAGE.Post.create');
    }
}
