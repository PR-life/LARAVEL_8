<?php

namespace App\Http\Requests\ADMIN\Category;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {		
		// dd(11);
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
