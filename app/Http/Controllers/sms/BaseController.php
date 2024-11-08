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
        // dd($quiz);
        if (!empty($quiz)) {
            $messageParts[] = "---Опрос---\n" . implode("\n", $quiz);
        }

        // Блок контактов
        $contacts = $this->buildContactsBlock($sms);
        if (!empty($contacts)) {
            $messageParts[] = "---контакты---\n" . implode("\n", $contacts);
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

        // dd($quiz);
        return $quiz;
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
        if (!empty($sms->area)) {
            $data[] = "<b>адрес</b> {$sms->area}";
        }
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
