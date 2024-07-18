<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;
//
use App\Models\Face;


class IndexTrashedController extends BaseController
{

    public function __invoke(){

        $faces = Face::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(40);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);

        return view('zADMIN.PAGE.Face.index', compact('faces'));

    }
}