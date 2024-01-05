<?php

namespace App\Http\Controllers\JJ\Js;
//
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
    public function sapfir() {
        
        return view('zJJ.zJS.sapfir');
    }

    public function src() {
        
        return view('zJJ.zJS.src');
    }
    
    public function morda() {
    
        return view('zJJ.zJS.Morda');
    }
}

