<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Manager;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\OOGWAY\UpdateRequest;
//
use App\Models\Oogway;


class UpdateController extends Controller
{
    // public function __invoke(Sms $sms){
    public function __invoke(UpdateRequest $request, Oogway $oogway){

		$data = [];

        // $data['h1'] = 'Категория';


        $data = $request->validated();



        isset($param['published']) ? '' : $param['published'] = '0';
        // 	// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
        
  
        //
        $oogway->update($data);


		    return back()->with('UpdateController', true);
    }
}
