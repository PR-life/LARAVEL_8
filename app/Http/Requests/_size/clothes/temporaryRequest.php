<?php

namespace App\Http\Requests\_size\clothes;

// use App\Http\Requests\ADMIN\Face\UpdateRequest as Face;
use Illuminate\Foundation\Http\FormRequest;





// https://laravel.su/docs/10.x/validation?ysclid=lwd1p4hc1h266890710





class temporaryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sku' => 'string',
            'face_id' => 'nullable',
            'up_size' => 'nullable',
            'bottom_size' => 'nullable',
            'size_jacket' => 'nullable',
            'size_jacket_height' => 'nullable',
            'size_jacket_exhaustiveness' => 'nullable',
            'size_trouser' => 'nullable',
            'size_shirt' => 'nullable',
            'size_hosiery' => 'nullable',
            'size_jeans' => 'nullable',
            'size_shoes' => 'nullable',
            // 'jacket' => 'nullable',




            'sku' => 'nullable|string',

			//
			'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'nullable|string',
            'birthday' => 'nullable',
            'gender' => 'nullable',


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
}