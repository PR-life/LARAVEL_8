<?php

namespace App\Http\Controllers\sms;

use Exception;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use App\Services\Sms\Service;
use App\Http\Requests\Sms\FullRequest;
use App\Http\Requests\Sms\PhoneNameRequest;
use App\Http\Requests\Sms\OrderRequest;
use App\Http\Requests\Sms\AskRequest;
use App\Http\Requests\Sms\CallBackRequest;
// use Illuminate\Http\Request;
// use App\Models\Post;

class SmsController extends BaseController
{
    private const REACH_GOALS = [
        'all' => 'error_11101641',
        'quiz' => 'error_11101642',
        'order' => 'error_11101643',
        'ask' => 'error_12101705',
        'phone_name' => 'error_14101545',
        'callback' => 'error_07111023',
    ];

    public function __construct(Service $service, Client $httpClient)
    {
        parent::__construct($service, $httpClient);
    }

    public function storeCallBack(CallBackRequest $request)
    {
        return $this->handleSmsRequest($request, 'zPAGE.vol.Thanks.index', self::REACH_GOALS['callback']);
    }
    public function storePhoneName(PhoneNameRequest $request)
    {
        return $this->handleSmsRequest($request, 'zPAGE.vol.Thanks.index', self::REACH_GOALS['phone_name']);
    }

    public function storeAsk(AskRequest $request)
    {
        // dd($request);
        return $this->handleSmsRequest(
            $request, 
            'zPAGE.Lead', 
            self::REACH_GOALS['ask']
        );
    }



    public function store(FullRequest $request)
    {
        // dd($request);
        return $this->handleSmsRequest($request, 'zPAGE.vol.Thanks.index', self::REACH_GOALS['all']);
    }













    //
    private function handleSmsRequest($request, $view, $reachGoalDefault, $additionalData = [])
    {
        // dd($request);
        $validatedData = $request->validated();
        $reachGoal = $validatedData['reachgoal_id'] ?? $reachGoalDefault;
        // dd($validatedData);
        try {
            $sms = $this->service->create($validatedData);
            // dd(222);
            $this->telega($sms);

            return view($view, array_merge(compact('sms', 'reachGoal'), $additionalData));
        } catch (Exception $e) {
            Log::error('Ошибка при создании SMS', [
                'error' => $e->getMessage(),
                'request' => $validatedData,
                'user_id' => auth()->id(),
            ]);

            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }

    // public function storeQuiz(PhoneNameRequest $request)
    // {
    //     return $this->handleSmsRequest($request, 'zPAGE.vol.Thanks.index', self::REACH_GOALS['quiz']);
    // }

    // public function storeOrder(OrderRequest $request)
    // {
    //     return $this->handleSmsRequest($request, 'zPAGE.vol.Thanks.index', self::REACH_GOALS['order']);
    // }

 
}
