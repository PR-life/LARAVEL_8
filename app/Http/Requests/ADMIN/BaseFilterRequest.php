<?php

namespace App\Http\Requests\ADMIN;

use Illuminate\Foundation\Http\FormRequest;

class BaseFilterRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {		
        return [
            'name' => 'nullable',
            'status' => 'nullable',
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
