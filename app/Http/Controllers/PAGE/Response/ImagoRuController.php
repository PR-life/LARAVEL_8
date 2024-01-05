<?php

namespace App\Http\Controllers\PAGE\Response;
//
use App\Http\Controllers\Controller;
use App\Http\Requests\Response\z\ImagoStoreRequest;

// use App\Http\Requests\PAGE\Equipment\FilterRequest;
// use App\Http\Filters\PaperFilter;
//
use App\Models\Sms;

class ImagoRuController extends Controller
{

    public function distributor()
    {
        return view('zImago.PAGE.Response.distributor');
    }


    public function author()
    {
        return view('zImago.PAGE.Response.author');
    }

    public function map()
    {

		// $category = Category::find('9');

        // $item = Post::whereSlug('about')->firstOrFail();
		// $items = Item::orderBy('order', 'asc')->orderBy('slug', 'desc')->get();
		// $modules = Module::orderBy('order', 'asc')->orderBy('slug', 'desc')->get();

		// $modules = Module::orderBy('order', 'asc')->orderBy('slug', 'desc')->get();
		// $items = $apk->merge($modules);
		

        return view('zImago.PAGE.Response.map');
    }



    public function store(ImagoStoreRequest $request) {
    
           
        // dd(Hash::make(2022));
            
        // dd($request->all());
    
        $param = $request->validated();
        // dd($param);

            
    
        if(strlen($param['title']) > 1) {
            return view('_.tmp.lol');
        } else {
            unset($param['title']);
        }
    
        $param['status'] = 300;
        
            // dd($param);
            $sms = Sms::create($param);
            return back()->with('responseSend', true);
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

}
