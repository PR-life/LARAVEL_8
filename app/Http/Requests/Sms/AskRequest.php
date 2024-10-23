<?php

namespace App\Http\Requests\Sms;

use App\Http\Requests\Sms\BaseRequest;

class AskRequest extends BaseRequest
{

    protected $errorBag = 'newAsk';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
            'sms' => 'required|min:6',
        ]);
    }

	public function messages() {
		return [
			'sms.required' => 'Ваш вопрос',
			'sms.min' => 'Ваш вопрос слишком короткий, минимум 6 символов',
		];
	}
}

 