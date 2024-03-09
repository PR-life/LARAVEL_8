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

            'sku'=>'nullable|string',

            'country'=>'nullable|string',
            'city'=>'nullable|string',
            'area'=>'nullable|string',

            'answer'=>'nullable|string',
            'answer_user_name'=>'nullable|string',

			//
            'go_mod_talk'=>'nullable|integer',
	
			//
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id', // .* - выбираем все что в array "tag_ids"

			//
			'order' => 'nullable|integer',
			'status' => 'nullable|integer',
			'featured' => 'nullable|integer',
			'published' => 'nullable|integer',

			//
			'mafia' => 'nullable|integer',

			'created_at' => 'required|date',
        ]);

    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			'created_at.date' => 'не дата',
		];
	}
}

 