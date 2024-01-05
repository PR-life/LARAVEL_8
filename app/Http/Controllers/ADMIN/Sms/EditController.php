<?php

namespace App\Http\Controllers\ADMIN\Sms;

//
use App\Models\Sms;


class EditController extends BaseController
{
    public function __invoke(Sms $sms){
		
		$data = [];
		 

        return view('zADMIN.PAGE.Sms.edit', compact('sms','data'));
    }
}
