<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Manager;

use App\Http\Controllers\Controller;
//
// use App\Http\Requests\ADMIN\OOGWAY\UpdateRequest;
use Illuminate\Http\Request;
//
use App\Models\Oogway;


class btnController extends Controller
{
    // public function __invoke(Sms $sms){
    public function __invoke(Request $request, Oogway $oogway){

		$data = [];

        $item = [
            // 'id' => $request->input('id'),
            'status' => $request->input('status')
        ];

        // dd($oogway);

        // $data['h1'] = 'Категория';


        // $data = $request->validated();



        // isset($param['published']) ? '' : $param['published'] = '0';
        // 	// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
        
  
        //
        $oogway->update($item);


		return back()->with('UpdateController', true);
    }
}
