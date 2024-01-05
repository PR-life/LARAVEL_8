<?php

namespace App\Http\Requests\Sms;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    protected $errorBag = 'newSms';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'name' => 'nullable|min:2',

            'contact' => 'nullable|min:2',

            'email' => 'nullable|email',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
			'whatsapp' => 'nullable|string',
			'telegram' => 'nullable|string',
			'viber' => 'nullable|string',


            'country'=>'nullable|string',
            'city'=>'nullable|string',
            'area'=>'nullable|string',

            'sms'=>'nullable|string',
            'answer'=>'nullable|string',

            'param_1'=>'nullable|string',
            'param_2'=>'nullable|string',
            'param_3'=>'nullable|string',

            'question_1'=>'nullable|string',
            'question_2'=>'nullable|string',
            'question_3'=>'nullable|string',
            'question_4'=>'nullable|string',

            'type'=>'nullable|string',
            'label'=>'nullable|string',

            
            'id_item'=>'nullable|string',
            'from_page'=>'nullable|string',

			//
            'title'=>'nullable|string',
            'lang'=>'nullable|string',
        ];
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			'name.required' => 'ваше имя',
            //
			'email.required' => 'куда прислать ответ',
			'email.email' => 'некорректный e-mail',
            //
			'phone.regex' => 'Неверный формат телефона',
			'phone.min' => 'Номер телефона должен содержать не менее 9 символов',
		];
	}
}

 