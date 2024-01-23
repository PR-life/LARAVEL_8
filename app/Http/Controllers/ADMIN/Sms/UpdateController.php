<?php

namespace App\Http\Controllers\ADMIN\Sms;

//
use App\Http\Requests\ADMIN\Sms\UpdateRequest;
//
use App\Models\Sms;


class UpdateController extends BaseController
{
    // public function __invoke(Sms $sms){
    public function __invoke(UpdateRequest $request, Sms $sms){

		// $data = [];
    // dd(11);
        // $data['h1'] = 'Категория';


        $data = $request->validated();

        isset($data['go_mod_talk']) ? '' : $data['go_mod_talk'] = '0';
        isset($data['status']) ? '' : $data['status'] = '1';

        // dd($data);
        $sms = $this->service->update($sms,$data);

        // dd($data);

		return back()->with('UpdateController', true);
    }
}
