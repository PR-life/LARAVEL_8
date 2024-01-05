<?php

namespace App\Http\Requests\Response\z;

use App\Http\Requests\Response\StoreRequest;


class ImagoStoreRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return array_merge(parent::rules(), [

            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
			'contact' => 'nullable|string',


			// 'whatsapp' => 'nullable|string',
			// 'telegram' => 'nullable|string',
			// 'viber' => 'nullable|string',


            'country'=>'nullable|string',
            'city'=>'nullable|string',
            'area'=>'nullable|string',

            
            'param_1'=>'nullable|string',
            'param_2'=>'nullable|string',
            'param_3'=>'nullable|string',
            
            'question_1'=>'nullable|string',
            'question_2'=>'nullable|string',
            
        ]);

    }

}

 