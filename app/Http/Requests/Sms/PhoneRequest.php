<?php

namespace App\Http\Requests\Sms;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
{

    protected $errorBag = 'newPhone';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',

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
			'phone.regex' => 'Неверный формат телефона',
			'phone.min' => 'Номер телефона короче 9 символов',
		];
	}
}

 