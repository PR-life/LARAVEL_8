<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
//
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
//
use App\Services\Sms\Service;
use App\Models\Product;

class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function telega($sms) {
        if ($sms['status'] < 10) {
            $token = config('AS.tg_token');
            $chat_id = config('AS.tg_chat_id');
            $client = new Client();

            // Формируем сообщение для отправки в Телеграм
            $Gotelegram = $this->buildTelegramMessage($sms);

            try {
                // Отправляем сообщение в Telegram через HTTP запрос
                $response = $client->post("https://api.telegram.org/bot{$token}/sendMessage", [
                    'form_params' => [
                        'chat_id' => $chat_id,
                        'parse_mode' => 'html',
                        'text' => $Gotelegram
                    ]
                ]);

                // Проверяем успешность запроса
                if ($response->getStatusCode() == 200) {
                    $sms['status'] = 11;
                    $sms->update();
                }
            } catch (Exception $e) {
                // Логируем ошибку при отправке в Телеграм
                Log::error('Ошибка при отправке в Telegram: ' . $e->getMessage());
            }
        }
    }

    private function buildTelegramMessage($sms) {
        $arrTelegram = [];
    
        if ($sms['label'] == 'ask') {
            $arrTelegram = array_merge([
                "~~~ форма: ВОПРОС ~~~ \n" => '',
            ], $arrTelegram);
        } elseif ($sms['label'] == 'lead') {

        } elseif ($sms['label'] == 'order') {
            $arrTelegram = array_merge([
                "~~~ форма: ЗАКАЗ~~~ \n" => '',
            ], $arrTelegram);
        } elseif ($sms['label'] == 'availability_check') {
            $arrTelegram = array_merge([
                "~~~ форма: УТОЧНИТЬ НАЛИЧИЕ~~~ \n" => '',
            ], $arrTelegram);

            if(isset($sms['product_id'])) {
                $item = Product::find($sms['product_id']);
            }

            $arrTelegram = array_merge($arrTelegram,[
                "<b>позиция:</b> " => ($item->name ?? 'Неизвестный товар') . "\n",
            ]);
        }
    


        // Проверяем, если метод доставки == '1' (самовывоз)
        if ($sms['delivery_method'] == '1') {
            $arrTelegram["---доставка---"] = '';
            $arrTelegram["<b>вариант:</b> "] = 'самовывоз';
        } elseif($sms['delivery_method'] == '2' && $sms->area) {
            $arrTelegram["---доставка---"] = '';
            $arrTelegram["<b>адрес:</b> "] = $sms->area;
        }




        // Создаем блок контактов
        $contacts = [];

        // Проверяем каждый контакт и добавляем, если он не пустой
        if (!empty($sms->email)) {
            $contacts["<b>email:</b> "] = $sms->email;
        }

        if (!empty($sms->whatsapp)) {
            $contacts["<b>Whatsapp:</b> "] = $sms->whatsapp;
        }

        if (!empty($sms->telegram)) {
            $contacts["<b>Телеграм:</b> "] = $sms->telegram;
        }

        if (!empty($sms->phone)) {
            $contacts["<b>Телефон:</b> "] = $sms->phone;
        }

    
        // Создаем блок данных
        $dataBlock = [];

        if (!empty($sms->name)) {
            $dataBlock["<b>Имя:</b> "] = $sms->name;
        }
        if (!empty($sms->sms)) {
            $dataBlock["\n<b>сообщение:</b> "] = $sms->sms;
        }
        if (!empty($sms->from_page) && $sms['label'] != 'availability_check') {
            $dataBlock["\n\n<b>стр. на сайте:</b> "] = $sms->from_page;
        }



        // Если хотя бы одно из полей заполнено, добавляем заголовок и контакты
        if (!empty($contacts)) {
            $arrTelegram["\n---контакты---"] = '';
            $arrTelegram = array_merge($arrTelegram, $contacts);
        }
     
        // Добавляем блок данных в основное сообщение, если есть данные
        if (!empty($dataBlock)) {
            $arrTelegram["\n---данные---"] = '';
            $arrTelegram = array_merge($arrTelegram, $dataBlock);
        }  


        // Собираем сообщение
        return implode("\n", array_map(function ($key, $value) {
            return "{$key}{$value}";
        }, array_keys($arrTelegram), $arrTelegram));
    }
    
}
