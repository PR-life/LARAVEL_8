<?php

namespace App\Http\Requests\ADMIN\Sms;

//
use App\Http\Requests\Sms\StoreRequest;

class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return array_merge(parent::rules(), [

            'answer'=>'nullable|string',

            'answer_user_name'=>'nullable|string',
            'go_mod_talk'=>'nullable|integer',

			'order' => 'nullable|integer',
			'status' => 'nullable|integer',
			'featured' => 'nullable|integer',
			'published' => 'nullable|integer',
			//
			'mafia' => 'nullable|integer',
        ]);

    }

	// public function messages() {
	// 	// return parent::messages(); // по умолчаиню
	// 	return [
	// 		'name.required' => 'ваше имя',
	// 		'email.required' => 'куда прислать ответ',
	// 		'email.email' => 'некорректный e-mail',
	// 	];
	// }
}

 