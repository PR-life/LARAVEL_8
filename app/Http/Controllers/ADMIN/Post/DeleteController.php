<?php

namespace App\Http\Controllers\ADMIN\Post;

use App\Models\Post;


class DeleteController extends BaseController
{
    public function __invoke(Post $post){
        $post->delete();
        return redirect()->back();
    }
}
