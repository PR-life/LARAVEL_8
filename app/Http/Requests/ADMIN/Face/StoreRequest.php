<?php

namespace App\Http\Requests\ADMIN\Face;

use App\Http\Requests\ADMIN\BaseRelationsRequest;

class StoreRequest extends BaseRelationsRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'sku' => 'nullable|string',

			//
			'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'nullable|string',
            'birthday' => 'nullable',

            //
            'email' => 'nullable|email',
            // 'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'phone' => 'nullable',
			'whatsapp' => 'nullable',
			// 'whatsapp' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
			'telegram' => 'nullable|string',
			'viber' => 'nullable',
			// 'viber' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',

            'public_contact' => 'nullable|string',

            //
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'area' => 'nullable|string',

            //
            'nickname' => 'nullable|string',
            'avatar' => 'nullable|string',

            //
            'estimation' => 'nullable|string',
            'reviews' => 'nullable|string',
            'posts' => 'nullable|string',

			//
            'face_par_1' => 'nullable|string',
            'face_par_2' => 'nullable|string',
            'face_par_3' => 'nullable|string',

            //
            'note' => 'nullable|string',

            //
            'crm_id' => 'nullable|integer|exists:crm,id',

			//
            'mafia' => 'nullable|integer',
        ];
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return array_merge(parent::messages(), [
			'name.required' => 'Имя: обязательное поле для нового профиля',
			'surname.required' => 'Фамилия: обязательное поле для нового профиля',
		]);
	}
}