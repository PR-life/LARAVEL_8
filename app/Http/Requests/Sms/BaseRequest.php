<?php

namespace App\Http\Requests\Sms;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'name' => 'nullable|min:2',
            'contact' => 'nullable|min:6',

            //
            'country'=>'nullable|string',
            'city'=>'nullable|string',
            'area'=>'nullable|string',

            //
            'sms' => 'nullable|string',
            'answer'=>'nullable|string',

            //
            'param_1'=>'nullable|string',
            'param_2'=>'nullable|string',
            'param_3'=>'nullable|string',

            'question_1'=>'nullable|string',
            'question_2'=>'nullable|string',
            'question_3'=>'nullable|string',
            'question_4'=>'nullable|string',

            'type'=>'nullable|string',
            'label'=>'nullable|string',

            'reachgoal_id'=>'nullable|string',
            'from_page'=>'nullable|string',

            'product_id'=>'nullable|integer',
            'item_id'=>'nullable|integer',
            'landing_id'=>'nullable|integer',


			//
            'title'=>'nullable|string',
            'lang'=>'nullable|string',
        ];
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
            'name.required' => 'Ваше имя',
            //
            'name.min' => 'Имя короче 2 символов',
            'contact.min' => 'Контакт короче 6 символов',
            //
			'email.required' => 'куда прислать ответ',
			'email.email' => 'некорректный e-mail',
            //
			'phone.regex' => 'Неверный формат телефона',
			'phone.min' => 'Номер телефона короче 9 символов',
		];
	}
}
