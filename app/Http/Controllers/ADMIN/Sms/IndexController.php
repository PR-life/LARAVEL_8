<?php

namespace App\Http\Controllers\ADMIN\Sms;

use App\Http\Controllers\Controller;
//
use App\Models\Sms;

class IndexController extends BaseController
{
    // public function index(){
    public function __invoke(){
		// $data = [];
        // $data['h1'] = 'Категории';
		// $data['slug'] = 'categories';

		$sms = Sms::orderBy('created_at', 'desc')->paginate(50);


        $page = request()->get('page');
        $tag_id = request()->get('tag_id');
        $category_id = request()->get('category_id');

        return view('zADMIN.PAGE.Sms.index', compact('sms','page','tag_id','category_id'));
    }
}
