<?php

namespace App\Http\Controllers\ADMIN\Sms;

//
use App\Models\Sms;

class IndexTrashedController extends BaseController
{
    public function __invoke(){

        $sms = Sms::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(40);

        return view('zADMIN.PAGE.Sms.index', compact('sms'));
    }
}