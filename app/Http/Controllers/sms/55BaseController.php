<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
//
use App\Inspections\Spam;
use App\Services\Sms\Service;


class gdrgdrBaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function telega($sms) {

        if($sms['status'] < 10) {

            $token = config('AS.tg_token');
            $chat_id = config('AS.tg_chat_id');

            // $sitename = config('AS.name');
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
                    '~ ' =>  $sms->param_1,
                    '%0A---данные---' => '',
                    '<b>Имя:</b> ' => $sms->name,
                    '<b>Телефон:</b> ' => $sms->phone,
                    '<b>Доставка:</b> ' => $sms->area,
                    '%0A---детали---' => '',
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