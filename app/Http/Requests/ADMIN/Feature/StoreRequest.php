<?php

namespace App\Http\Requests\ADMIN\Feature;

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
			'sku' => 'nullable',
            'name' => 'required|string|unique:tags',
			'slug' => 'required|string|unique:tags',
            //
            'group_id' => 'nullable|integer|exists:groups,id',
            
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'nullable|integer|exists:categories,id', // .* - выбираем все что в array "tag_ids"
            

			'order' => 'nullable|string',
			'status' => 'nullable|string',
			'published' => 'nullable|string',
        ];
    }
}
