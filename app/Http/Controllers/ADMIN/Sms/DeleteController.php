<?php

namespace App\Http\Controllers\ADMIN\Sms;

//
use App\Models\Sms;

class DeleteController extends BaseController
{
    public function __invoke(Sms $sms){
        $sms->delete();
        return redirect()->back();
    }
}
