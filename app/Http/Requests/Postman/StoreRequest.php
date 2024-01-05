<?php

namespace App\Http\Requests\Postman;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sku'=>'nullable|string',

            'name' => 'nullable|string',
            'user_contact'=>'nullable|string',

            'h1'=>'nullable|string',
            'text'=>'required|string',
            'answer'=>'nullable|string',
            'answer_user_name'=>'nullable|string',


            'item_id'=>'nullable|integer',
            'user_id'=>'nullable|integer',

            'order'=>'nullable|integer',
            'published'=>'nullable|integer',

			//
            'title'=>'nullable|string',
        ];
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			'text.required' => 'Ваш вопрос',
		];
	}
}

 