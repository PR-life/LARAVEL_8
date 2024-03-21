<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//
// use Illuminate\Support\Facades\Mail;

use App\Models\Sms;
use App\Models\En\SmsEn;
use App\Http\Requests\Sms\StoreRequest;
use App\Http\Requests\Sms\AskRequest;
// use App\Http\Requests\Sms\zSi\StoreRequestSi;
// use App\Http\Requests\Sms\PostmanRequest;
// use App\Http\Requests\Sms\NotiRequest;
// use App\Http\Requests\Sms\LeadRequest;
// use App\Models\Noti;
// use App\Models\Lead;
// use App\Models\CommentPaper;
// use App\Models\CommentPost;
// use App\Models\CommentCourse;
// use Mail;
// use Illuminate\Support\Facades\Hash;
use App\Inspections\Spam;

class SmsController extends Controller
{
 

    public function update(Request $request) {

        $idSms = $request->input('id_sms');

        $data = [
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'whatsapp' => $request->input('whatsapp'),
            'telegram' => $request->input('telegram'),
            'viber' => $request->input('viber'),
            'lang' => $request->input('lang_sms'),
        ];
        
        // dd($data['lang']);

        if($data['lang'] == 'ru') {
            $sms = Sms::find($idSms);
        };
        if($data['lang'] == 'en') {
            $sms = SmsEn::find($idSms);
        };

        

        // dd($idSms);
        $sms->update($data);

        return view('_.Thanks', compact('sms'));
    }


    public function manager() {
        $sandbox = [];
        return view('zPAGE.Lead', compact('sandbox'));
    }




    // public function store(Post $post) {
    public function ask(AskRequest $request) {

        // dd('ask form');
        // dd(app()->getLocale());

        $param = $request->validated();


 

        if(strlen($param['title']) > 1) {
            return view('_.Lol', compact('param'));
        } else {
            $param['sms'] = $param['ask'];
            unset($param['title']);
            unset($param['ask']);
            
            isset($param['type']) == null ? $param['type'] = "ask" : '';

            isset($param['lang']) ? $lang = $param['lang'] : $lang = "ru";

            if($lang == 'ru') {
                isset($param['name']) == null ? $param['name'] = "Аноним" : '';
                $sms = Sms::create($param);
            };
            if($lang == 'en') {
                isset($param['name']) == null ? $param['name'] = "Anonymous" : '';
                $sms = SmsEn::create($param);
            };
        }

        // $sandbox = [
        //     'id_sms' => $sms->id,
        // ];

        return redirect(route('sms.manager'))->with('id_sms', $sms->id)->with('lang_sms', $sms->lang);
        // return view('_.Lead', compact('sandbox'));
    }


    public function store(StoreRequest $request) {

        // dd($request);

        $param = $request->validated();
        unset($param['tech_idFormError']);

        
        // dd($param);

        if(strlen($param['title']) > 1) {
            return view('zPAGE.Lol', compact('param'));
        } else {
            unset($param['title']);
            isset($param['name']) == null ? $param['name'] = "Аноним" : '';
        }

        try {

            if(isset($param['sms'])) {
                resolve(Spam::class)->detect($param['sms']);
            }

            // dd(222);
            $sms = Sms::create($param);
            


            // $token = env('TG_TOKEN', '6440933163:AAE2U2nF_5IXnC3GC1l8kd8n8iljL6JyN1Y');
            // $chat_id = env('TG_CHAT_ID', '6020403524');
            // $sitename = "velkomsochi.ru";
            // $Gotelegram = '';       
 
            
            // $arrTelegram = array(

            //     '<b>Имя:</b> ' => $sms->name,
            //     '<b>Телефон:</b> ' => $sms->phone,
            //     '' => '',
            //     '-----' => '',
            //     '~ ' => 'АКЦИЯ | бесплатный аудит ваше системы видеонаблюдения'
            //   );



            //   foreach ($arrTelegram as $key => $value) {
            //         $Gotelegram .= $key.$value."%0A";
            //         // $Gotelegram .= "<b>".$key."</b>".$value."%0A";
            //     }

            // $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$Gotelegram}","r");


            // if (isset($sms)) {

                

            //   $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$Gotelegram}","r");
            
            // }


            // dd(11);


            return view('zPAGE.Thanks', compact('sms'));



            return back()->with('smsSend', true);
            // if($sms->type == 'ask') {
            //     return redirect(route('sms.manager'));
            // } else {
            //     // dd(22);
            //     return back()->with('smsSend', true);
            // }


            // $post = Post::find($post->id);

            // $post->comments()->create([
            //     'user_id' => auth()->id(),
            //     'sms' => request('sms'),
            // ]);

            // return redirect("/blog/{$post->url}#comments")->with([
            //     'status' => 'success',
            //     'message' => 'Your comment was published successfully',
            // ]);


        } catch (Exception $e) {
            return redirect()->back()->with([
                'status' => 'danger',
                'message' => $e->getMessage(),
            ]);
        }
    }


 
 







    public function store_old(StoreRequest $request) {
      
		
        // dd(Hash::make(2022));
        // dd($request->all());

        $param = $request->validated();
        // dd($param);
        

        // if(strlen($param['title']) > 1) {
        //     return view('_.lol');
        // } else {
        //     unset($param['title']);
        //     isset($param['name']) == null ? $param['name'] = "Аноним" : '';
        // }



        $sms = Sms::create($param);
        return back()->with('smsSend', true);


        
        // return back()->with('success', 'We have received your message');


        
                // dd($sms->sms);
        
        
        
                // //  Send mail to admin
                // Mail::send('_.form.tmp.mail', array(
                //     'name' => $request->get('name'),
                //     'email' => $request->get('email'),
                //     'phone' => $request->get('phone'),
                //     'country' => $request->get('country'),
                //     'city' => $request->get('city'),
                //     'sms' => $request->get('sms'),
                //     //
                //     'www' => 'sensitiv-imago.ru',
                //     'title' => $request->get('title'),
                //     //
                //     'page' => $request->fullUrl(),
                //     'date' => date('Y-m-d H:i:s'),
                //     //
                // ), function($message) use ($request){
                //     // $message->to('sensitiveaudit@yandex.ru', 'Admin')->subject($request->get('title'));
                //     // $message->to('otvetalfamed@yandex.ru', 'Admin')->subject($request->get('title'));
                //     // $message->to('stepanov-mt12@yandex.ru', 'Admin')->subject($request->get('title'));
                //     $message->to('sensitiveaudit@yandex.ru', 'Admin')
                //         ->bcc('stepanov-mt12@yandex.ru')
                //         ->subject($request->get('title'));
                // });
        
        
        
        
        
                // $token = "1863740238:AAF4AD_-asCbgXrUEI2Bl2RSzcTqmvyHojQ";
                // $chat_id = "-546396707";
                // $sitename = "sensitiv-imago.ru";
                // $Gotelegram = '';
                
                // $arrTelegram = array(
                //   '<b>Страница Контакты</b>' => '',
                //   '-----' => '',
                //   '<b>Имя:</b> ' => $sms->name,
                //   '<b>страна:</b> ' => $sms->country,
                //   '<b>город:</b> ' => $sms->city,
                //   '' => '',
                //   'КОНТАКТЫ:' => '',
                //   $sms->email => '',
                //   $sms->phone => '',
                //   '' => '',
                //   '-----' => '',
                //   '~ ' => $sms->sms
                // );
                
                
                
                // foreach ($arrTelegram as $key => $value) {
                //     $Gotelegram .= $key.$value."%0A";
                //     // $Gotelegram .= "<b>".$key."</b>".$value."%0A";
                // }
                
                
                // $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$Gotelegram}","r");
        
        

                
    }

    private function lol($param) {
        if(strlen($param['title']) > 1) {
            return false;
        } else {
            unset($param['title']);
            isset($param['name']) == null ? $param['name'] = "Аноним" : '';
        }

        return $param;
    }
}

