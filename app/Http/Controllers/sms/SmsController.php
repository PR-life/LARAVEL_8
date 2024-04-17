<?php

namespace App\Http\Controllers\sms;

use Exception;

use Illuminate\Http\Request;
use App\Http\Requests\Sms\StoreRequest;
use App\Http\Requests\Sms\PhoneRequest;
use App\Http\Requests\Sms\PhoneNameRequest;
use App\Http\Requests\Sms\AskRequest;

//
use App\Models\Sms;
use App\Models\En\SmsEn;


class SmsController extends BaseController
{

 
    public function storeAsk(AskRequest $request) {

        // dd($request);
        $param = $request->validated();
        // dd($param);

        try {
            $sms = $this->service->create($param);

            // return route('sms.manager',$sms->id);
            return view('zPAGE.Lead', compact('sms'));

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function storePhoneName(PhoneNameRequest $request) {

        // dd($request);
        $param = $request->validated();

        try {

            $sms = $this->service->create($param);
            $this->telega($sms);

            return view('zPAGE.Thanks', compact('sms'));

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function storePhone(PhoneRequest $request) {

        // dd($request);
        $param = $request->validated();
        // dd($param);

        try {

            $sms = $this->service->create($param);
            $this->telega($sms);

            return view('zPAGE.Thanks', compact('sms'));

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }

}