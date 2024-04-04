<?php

namespace App\Http\Requests\ADMIN\Faq;

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
            'category_id' => 'nullable',
            // 'status' => 'nullable',
            // 'user_id' => 'nullable',
            // 'category_sku' => 'nullable',
            // 'mafia' => 'nullable',
            // // для фильтра
			// 'page' => '',
			// 'per_page' => '',
        ];
    }
}
