<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
//
use App\Inspections\Spam;
use App\Services\Sms\Service;


class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }



    public function telega($sms) {

        if($sms['status'] < 10) {


            $token = env('TG_TOKEN', '6440933163:AAE2U2nF_5IXnC3GC1l8kd8n8iljL6JyN1Y');
            $chat_id = env('TG_CHAT_ID', '6020403524');
            // $chat_id = env('TG_CHAT_ID', '-1002111235698');
            $sitename = env('APP_NAME');
            $Gotelegram = '';       
     

            if($sms['label'] == 'ask') {
                $arrTelegram = array(
                    '---вопрос---' => '',
                    '' =>  $sms->sms."%0A",
                    '---контакты---' => '',
                    '<b>email:</b> ' => $sms->email,
                    '<b>Телефон:</b> ' => $sms->phone,
                    '<b>Whatsapp:</b> ' => $sms->whatsapp,
                    '<b>Телеграм:</b> ' => $sms->telegram,
                    '%0A---описание---' => '',
                    '~ ' =>  'форма: Задать вопрос',
                    '<b>откуда:</b> ' => $sms->from_page,
                  );
            } else {
                $arrTelegram = array(
                    '<b>Имя:</b> ' => $sms->name,
                    '<b>Телефон:</b> ' => $sms->phone,
                    '%0A---описание---' => '',
                    '~ ' =>  $sms->param_1,
                    '<b>откуда:</b> ' => $sms->from_page,
                  );
            }
             


    
            foreach ($arrTelegram as $key => $value) {
    
                // if ($key === array_key_first($arrTelegram)) {
                //     echo 'FIRST ELEMENT!';
                // }
            
                if ($key === array_key_last($arrTelegram)) {
                    $Gotelegram .= $key.$value;
                } else {
                    $Gotelegram .= $key.$value."%0A";
                }
            }
    
            // dd($Gotelegram);
    

            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$Gotelegram}","r");
            $sms['status'] = 11;
            $sms->update();
        }


         
        // dd($sendToTelegram);

    }
}
