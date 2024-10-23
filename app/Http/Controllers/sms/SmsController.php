<?php

namespace App\Http\Controllers\sms;

use Exception;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use App\Services\Sms\Service;
// use Illuminate\Http\Request;
//
use App\Http\Requests\Sms\PhoneRequest;
use App\Http\Requests\Sms\PhoneNameRequest;
use App\Http\Requests\Sms\AskRequest;
use App\Http\Requests\Sms\OrderRequest;
// use App\Http\Requests\Sms\StoreRequest;

//
use App\Models\Post;
// use App\Models\Sms;
// use App\Models\En\SmsEn;


class SmsController extends BaseController
{

    public function __construct(Service $service, Client $httpClient)
    {
        parent::__construct($service, $httpClient);
    }

    public function storeOrder(OrderRequest $request) {

        // dd($request);
        $validatedData = $request->validated();
        $reachGoalFromController = $validatedData['reachgoal_id'] ?? 'error_11101646';
        // dd($validatedData);
        
        try {
            $sms = $this->service->create($validatedData);
            $this->telega($sms);

            return view('zPAGE.vol.Thanks.index', compact('sms','reachGoalFromController'));

        } catch (Exception $e) {
            Log::error('Ошибка при создании SMS (storeOrder): ' . $e->getMessage());
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }
 
    public function storeAsk(AskRequest $request) {

        $validatedData = $request->validated();
        $reachGoalFromController = $validatedData['reachgoal_id'] ?? 'error_12101705';
        // dd($validatedData);

        try {
            $sms = $this->service->create($validatedData);
                        
            //
            $item = Post::whereSlug('storeask')->firstOrFail();

            return view('zPAGE.Lead', compact('sms', 'item'));

        } catch (Exception $e) {
            Log::error('Ошибка при создании SMS (storeAsk): ' . $e->getMessage());
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }

    
    public function storePhoneName(PhoneNameRequest $request) {

        // dd($request);
        $validatedData = $request->validated();
        $reachGoalFromController = $validatedData['reachgoal_id'] ?? 'error_14101545';
        // dd($validatedData);

        try {
            $sms = $this->service->create($validatedData);
            $this->telega($sms);

            return view('zPAGE.vol.Thanks.index', compact('sms','reachGoalFromController'));

        } catch (Exception $e) {
            Log::error('Ошибка при создании SMS (storePhoneName): ' . $e->getMessage());
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }

    }

    // public function storePhone(PhoneRequest $request) {

    //     // dd($request);
    //     $param = $request->validated();
    //     // dd($param);

    //     try {

    //         $sms = $this->service->create($param);
    //         $this->telega($sms);

    //         return view('zPAGE.Thanks', compact('sms'));

    //     } catch (Exception $e) {
    //         dd($e);
    //         return redirect()->back()->with([
    //             'status' => 'danger',
    //             'message' => $e->getMessage(),
    //         ]);
    //     }
    // }

}