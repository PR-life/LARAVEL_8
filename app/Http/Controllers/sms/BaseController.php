<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Services\Sms\Service;
use App\Models\Product;

class BaseController extends Controller
{
    protected $service;
    protected $httpClient;
    protected $telegramToken;
    protected $telegramChatId;

    public function __construct(Service $service, Client $httpClient)
    {
        $this->service = $service;
        $this->httpClient = $httpClient;
        $this->telegramToken = config('AS.tg_token');
        $this->telegramChatId = config('AS.tg_chat_id');
    }
    
    public function telega($sms)
    {
        if ($sms['status'] < 10) {

            // dd($sms);
            $message = $this->buildTelegramMessage($sms);

            try {
                $this->sendTelegramMessage($message);
                $sms['status'] = 11;
                $sms->update();
            } catch (Exception $e) {
                Log::error('Ошибка при отправке в Telegram: ' . $e->getMessage());
            }
        }
    }

    private function buildTelegramMessage($sms)
    {
        $messageParts = [];

        // Добавление заголовка формы
        $messageParts[] = $this->getFormHeader($sms['label'], $sms['product_id'] ?? null);

        // Блок доставки
        $messageParts[] = $this->getDeliveryInfo($sms);

        // Квиз
        $quiz = $this->buildQuiz($sms);
        if (!empty($quiz)) {
            $messageParts[] = "---Опрос---\n" . implode("\n", $quiz);
        }

        // Параметры
        $params = $this->buildParam($sms);
        if (!empty($params)) {
            $messageParts[] = "---Параметры---\n" . implode("\n", $params);
        }

        // Блок контактов
        $contacts = $this->buildContactsBlock($sms);
        if (!empty($contacts)) {
            $messageParts[] = "---контакты---\n" . implode("\n", $contacts);
        }

        // Блок адреса
        $data07122230 = $this->buildData07122230($sms);
        if (!empty($params)) {
            $messageParts[] = implode("\n", $data07122230);
        }

        // Блок данных
        $dataBlock = $this->buildDataBlock($sms);
        if (!empty($dataBlock)) {
            $messageParts[] = "---данные---\n" . implode("\n", $dataBlock);
        }

        return implode("\n\n", array_filter($messageParts));
    }
    private function getFormHeader($label, $productId = null)
    {
        switch ($label) {
            case 'callback':
                return "~~~ форма: ОБРАТНЫЙ ЗВОНОК ~~~";
            case 'quiz':
                return "~~~ форма: КВИЗ ~~~";
            case 'ask':
                return "~~~ форма: ВОПРОС ~~~";
            case 'order':
                return "~~~ форма: ЗАКАЗ ~~~";
            case 'support':
                return "~~~ CRM ~~~";
            case 'availability_check':
                $product = Product::find($productId);
                $productName = $product->name ?? 'Неизвестный товар';
                return "~~~ форма: УТОЧНИТЬ НАЛИЧИЕ ~~~\n\n<b>позиция:</b> $productName";
            default:
                return '';
        }
    }


    private function getDeliveryInfo($sms)
    {
        if($sms['label'] == 'order') {
            if ($sms['delivery_method'] == '1') {
                return "---доставка---\n<b>вариант:</b> самовывоз";
            } elseif ($sms['delivery_method'] == '2' && !empty($sms->area)) {
                return "---доставка---\n<b>адрес:</b> {$sms->area}";
            }            
        }
        return '';
    }


    private function buildData07122230($sms)
    {
        $data07122230 = [];

        if (!empty($sms->country)) {
            $data07122230[] = "<b>country:</b> {$sms->country}";
        }
        if (!empty($sms->city)) {
            $data07122230[] = "<b>city:</b> {$sms->city}";
        }
        if (!empty($sms->area)) {
            $data07122230[] = "<b>area:</b> {$sms->area}";
        }

        return $data07122230;
    }
    private function buildQuiz($sms)
    {
        $quiz = [];

        if (!empty($sms->question_1)) {
            $quiz[] = "<b>question_1:</b> {$sms->question_1}";
        }
        if (!empty($sms->question_2)) {
            $quiz[] = "<b>question_2:</b> {$sms->question_2}";
        }
        if (!empty($sms->question_3)) {
            $quiz[] = "<b>question_3:</b> {$sms->question_3}";
        }

        return $quiz;
    }

    private function buildParam($sms)
    {
        $params = [];

        if (!empty($sms->param_1)) {
            $params[] = "<b>param_1:</b> {$sms->param_1}";
        }
        if (!empty($sms->param_2)) {
            $params[] = "<b>param_2:</b> {$sms->param_2}";
        }
        if (!empty($sms->param_3)) {
            $params[] = "<b>param_3:</b> {$sms->param_3}";
        }

        return $params;
    }


    private function buildContactsBlock($sms)
    {
        $contacts = [];

        if (!empty($sms->email)) {
            $contacts[] = "<b>email:</b> {$sms->email}";
        }
        if (!empty($sms->whatsapp)) {
            $contacts[] = "<b>Whatsapp:</b> {$sms->whatsapp}";
        }
        if (!empty($sms->telegram)) {
            $contacts[] = "<b>Телеграм:</b> {$sms->telegram}";
        }
        if (!empty($sms->phone)) {
            $contacts[] = "<b>Телефон:</b> {$sms->phone}";
        }
        return $contacts;
    }
    private function buildDataBlock($sms)
    {
        $data = [];

        if (!empty($sms->name)) {
            $data[] = "<b>Имя:</b> {$sms->name}";
        }
        if (!empty($sms->sms)) {
            $data[] = "<b>сообщение</b>\n{$sms->sms}";
        }
        // if (!empty($sms->area)) {
        //     $data[] = "<b>адрес</b> {$sms->area}";
        // }
        if (!empty($sms->from_page) && $sms['label'] != 'availability_check') {
            $data[] = "\n\n<b>стр. на сайте:</b> {$sms->from_page}";
        }


        return $data;
    }
    private function sendTelegramMessage($message)
    {
        $this->httpClient->post("https://api.telegram.org/bot{$this->telegramToken}/sendMessage", [
            'form_params' => [
                'chat_id' => $this->telegramChatId,
                'parse_mode' => 'html',
                'text' => $message
            ]
        ]);
    }
}
