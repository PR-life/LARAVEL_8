<?php

namespace App\Http\Requests\Response;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // dd($this);

        if(!$this['name'] && $this['name_def']) {
            $this['name'] = $this['name_def'];
        }

        if(!$this['email'] && $this['email_def']) {
            $this['email'] = $this['email_def'];
        }

        // dd($this);


        return [
            'name' => 'required|string',
            'email' => 'required|email',

            // 'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
			// 'whatsapp' => 'nullable|string',
			// 'telegram' => 'nullable|string',
			// 'viber' => 'nullable|string',


            // 'country'=>'required|string',
            // 'city'=>'required|string',

            'sms'=>'nullable|string',

            // 'param_1'=>'nullable|string',
            // 'param_2'=>'nullable|string',
            
            'from_page'=>'nullable|string',

			// //
            'title'=>'nullable|string',
        ];
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			'name.required' => 'ваше имя',
			'email.required' => 'куда прислать ответ',
			'email.email' => 'некорректный e-mail',
		];
	}
}

 