<?php

namespace App\Http\Controllers\JJ;
use App\Http\Controllers\Controller;

//
use Illuminate\Support\Facades\Storage;

class srcController extends Controller
{
    public function foto() {
        $path = public_path('/images-0/lib/pc/');
        $filePc = \File::files($path);
        
        $path = public_path('/images-0/lib/pattern/');
        $filePattern = \File::files($path);
    
        $path = public_path('/images-0/lib/look/');
        $fileLook = \File::files($path);
    
    
        $path = public_path('/images-0/lib/gif/');
        $fileGif = \File::files($path);
    
        
        $path = public_path('/images-0/lib/svg/');
        $fileSvg = \File::files($path);
     
    
            return view('zJJ.PAGE.file.foto',compact('filePc','filePattern','fileLook', 'fileGif', 'fileSvg'));
    }


    public function video() {
        $path = public_path('/video-0/lib/');
        $fileLib = \File::files($path);
    
     
    
            return view('zJJ.PAGE.file.video',compact('fileLib'));
        }
    

}

