<?php

namespace App\Http\Controllers\JJ;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function morda() {
    
        return view('zJJ.Morda');
    }


    // public function video() {
    //     $path = public_path('/video-0/lib/');
    //     $fileLib = \File::files($path);
    
     
    
    //         return view('zLara.PAGE.file.video',compact('fileLib'));
    //     }
    

}

