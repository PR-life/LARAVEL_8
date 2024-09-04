<?php

namespace App\Http\Requests\ADMIN\Detail;

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
            
            'tag_id' => 'nullable|integer|exists:tags,id',

            'category_id' => 'nullable|integer|exists:categories,id',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'nullable|integer|exists:categories,id',
            


			'order' => 'nullable|string',
			'status' => 'nullable|string',
			'published' => 'nullable|string',
        ];
    }
}
