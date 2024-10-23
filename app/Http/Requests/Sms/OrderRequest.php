<?php

namespace App\Http\Requests\Sms;

use App\Http\Requests\Sms\BaseRequest;

class OrderRequest extends BaseRequest
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

			'phone.regex' => 'Неверный формат телефона',
			'phone.min' => 'Номер телефона короче 9 символов',
		];
	}
}

 