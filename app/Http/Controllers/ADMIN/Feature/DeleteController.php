<?php

namespace App\Http\Controllers\ADMIN\Feature;

use App\Http\Controllers\Controller;
//
use App\Models\Feature;

class DeleteController extends Controller
{
    public function __invoke(Tag $tag){
        $tag->delete();
        return redirect()->back();
    }
}
