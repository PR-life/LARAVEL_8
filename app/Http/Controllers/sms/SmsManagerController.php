<?php

namespace App\Http\Controllers\sms;

use Exception;

use App\Http\Requests\Sms\UpdateRequest;
//
use App\Models\Sms;
use App\Models\En\SmsEn;


class SmsManagerController extends BaseController
{

    public function update(UpdateRequest $request) {

        $param = $request->validated();
        // dd($param);

        if($param['lang'] == 'ru') {
            $sms = Sms::find($param['id']);
        };
        if($param['lang'] == 'en') {
            $sms = SmsEn::find($param['id']);
        };

        // dd($sms);
        $param = $this->service->update($param);
        $sms->update($param);
        $this->telega($sms);

        $reachGoalFromController = $sms->reachgoal_id;
 

        return view('zPAGE.Thanks', compact('sms','reachGoalFromController'));
        // return view('_.Thanks', compact('sms'));
    }




}