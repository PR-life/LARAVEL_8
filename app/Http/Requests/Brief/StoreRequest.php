<?php

namespace App\Http\Requests\Brief;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    protected $errorBag = 'newBrief';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'sku' => 'nullable|min:2',
            // 'name' => 'required|min:2',
            'name' => 'nullable|string',
            'from_page'=>'nullable|string',
            'title'=>'nullable|string',

            'q1_name'=>'nullable|string',
            'q1'=>'nullable|string',
            'q2_name'=>'nullable|string',
            'q2'=>'nullable|string',
            'q3_name'=>'nullable|string',
            'q3'=>'nullable|string',
            'q4_name'=>'nullable|string',
            'q4'=>'nullable|string',
            'q5_name'=>'nullable|string',
            'q5'=>'nullable|string',
            'q6_name'=>'nullable|string',
            'q6'=>'nullable|string',
            'q7_name'=>'nullable|string',
            'q7'=>'nullable|string',
            'q8_name'=>'nullable|string',
            'q8'=>'nullable|string',
            'q9_name'=>'nullable|string',
            'q9'=>'nullable|string',
            'q10_name'=>'nullable|string',
            'q10'=>'nullable|string',
            'q11_name'=>'nullable|string',
            'q11'=>'nullable|string',
            'q12_name'=>'nullable|string',
            'q12'=>'nullable|string',

            'v1_name'=>'nullable|string',
            'v1'=>'nullable|string',
            // 'v1'=>'nullable|array',
            // 'v1.*' => 'nullable|integer',
            'v2_name'=>'nullable|string',
            'v2'=>'nullable|array',
            'v2.*' => 'nullable|integer',
            'v3_name'=>'nullable|string',
            'v3'=>'nullable|array',
            'v2.*' => 'nullable|integer',
            'v4_name'=>'nullable|string',
            'v4'=>'nullable|array',
            'v4.*' => 'nullable|integer',
            'v5_name'=>'nullable|string',
            'v5'=>'nullable|array',
            'v5.*' => 'nullable|integer',
        ];
    }

	public function messages() {
		return parent::messages(); // по умолчаиню
		// return [
		// 	'name.required' => 'ваше имя',
        //     //
		// 	'email.required' => 'куда прислать ответ',
		// 	'email.email' => 'некорректный e-mail',
        //     //
		// 	'phone.regex' => 'Неверный формат телефона',
		// 	'phone.min' => 'Номер телефона должен содержать не менее 9 символов',
		// ];
	}
}

 