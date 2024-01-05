<?php

namespace App\Http\Requests\ADMIN\Tag;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
			'sku' => 'nullable',
            'name' => 'required|string|unique:tags',
			'slug' => 'required|string|unique:tags',
            //
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'nullable|integer|exists:categories,id', // .* - выбираем все что в array "tag_ids"

			'order' => 'nullable|string',
			'status' => 'nullable|string',
			'published' => 'nullable|string',
        ];
    }
}
