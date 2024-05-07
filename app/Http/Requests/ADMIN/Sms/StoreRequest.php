<?php

namespace App\Http\Requests\ADMIN\Sms;

//
use App\Http\Requests\ADMIN\BaseRelationsRequest;

class StoreRequest extends BaseRelationsRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [

            'name' => 'nullable|min:2',

            //
            'email' => 'nullable|email',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
			'whatsapp' => 'nullable|string',
			'telegram' => 'nullable|string',
			'viber' => 'nullable|string',

    		//
            'sms'=>'nullable|string',
            'answer'=>'nullable|string',

            'param_1'=>'nullable|string',
            'param_2'=>'nullable|string',
            'param_3'=>'nullable|string',

            'question_1'=>'nullable|string',
            'question_2'=>'nullable|string',
            'question_3'=>'nullable|string',
            'question_4'=>'nullable|string',
        
        ]);
    }

	// public function messages() {
	// 	return array_merge(parent::messages(), [
	// 		// 'name.required' => 'Название поста',
	// 		// 'prev_image.file' => 'необходимо выбрать файл',
	// 	]);
	// }
}

 