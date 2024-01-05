<?php

namespace App\Http\Controllers\ADMIN\Sms\Conversion;

use App\Http\Controllers\Controller;
//
use App\Models\Sms;

class IndexController extends BaseController
{
    // public function index(){
    public function __invoke(){
		$data = [];
        // $data['h1'] = 'Категории';
		// $data['slug'] = 'categories';

		$sms = Sms::orderBy('created_at', 'desc')->where('type','conversion')->paginate(25);

        return view('zADMIN.PAGE.Sms.index', compact('sms','data'));
    }
}
