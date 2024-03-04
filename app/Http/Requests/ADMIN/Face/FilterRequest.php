<?php

namespace App\Http\Requests\ADMIN\Face;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {		
		// dd(11);
        return [
            'name' => 'nullable',
            'patronymic' => 'nullable',
            'category_id' => 'nullable',
            // 'user_id' => 'nullable',
            // 'category_sku' => 'nullable',
            // 'mafia' => 'nullable',
            // // для фильтра
			// 'page' => '',
			// 'per_page' => '',
        ];
    }
}
