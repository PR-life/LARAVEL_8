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
            'sms'=>'required|min:6',

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
		return [
			'name.min' => 'Имя короче 2 символов',
            //
			'sms.required' => 'Ваш вопрос',
			'sms.min' => 'Ваш вопрос слишком короткий, минимум 6 символов',
		];
	}
}

 