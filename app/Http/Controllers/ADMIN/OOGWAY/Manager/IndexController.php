<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Manager;
//
use App\Http\Controllers\Controller;
////
use App\Models\Oogway;

class IndexController extends Controller
{
    public function __invoke(){

        $oogways = Oogway::orderBy('created_at', 'desc')->paginate(25);

        return view('zADMIN.OOGWAY.PAGE.manager.Morda', compact('oogways'));
    }
}