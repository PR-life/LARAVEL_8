<?php

namespace App\Http\Requests\ADMIN\Face;

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

            'sku' => 'nullable|string',

			//
			'name' => 'nullable|string',
            'surname' => 'nullable|string',
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

            'knot_1' => 'nullable|string',
            'note' => 'nullable|string',

            //
            'category_id' => 'nullable|integer|exists:categories,id',
            'tag_id' => 'nullable|integer|exists:tags,id',
            'group_id' => 'nullable|integer|exists:groups,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',    


			//
            'order' => 'nullable|integer',
            'status' => 'nullable|integer',
            'published' => 'nullable|integer',

            'mafia' => 'nullable|integer',

			//
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'deleted_at' => 'nullable',
        ];
    }
}
