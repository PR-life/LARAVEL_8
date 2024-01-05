<?php

namespace App\Http\Requests\Sms;

use Illuminate\Foundation\Http\FormRequest;

class AskRequest extends FormRequest
{

    protected $errorBag = 'newAsk';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'name' => 'nullable|min:2',
            'ask'=>'min:6',

            //
            'type'=>'nullable|string',
            'label'=>'nullable|string',

            //
            'id_item'=>'nullable|string',
            'from_page'=>'nullable|string',

			//
            'title'=>'nullable|string',
            'lang'=>'nullable|string',
        ];
    }

	public function messages() {
		return [
			'name.min' => 'ваше имя',
            //
			'ask.min' => 'Ваш вопрос слишком короткий, минимум 6 символов',
		];
	}
}

 