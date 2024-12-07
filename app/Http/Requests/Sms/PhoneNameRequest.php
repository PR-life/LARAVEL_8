<?php

namespace App\Http\Requests\Sms;

use App\Http\Requests\Sms\BaseRequest;

class PhoneNameRequest extends BaseRequest
{

    protected $errorBag = 'newPhoneName';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        ]);
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
            'name.required' => 'Ваше имя',
            'name.min' => 'Имя короче 2 символов',
            //
			'phone.regex' => 'Неверный формат телефона',
			'phone.min' => 'Номер телефона короче 9 символов',
		];
	}
}

 