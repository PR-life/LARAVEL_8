<?php

namespace App\Http\Requests\ADMIN\Category;

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
            'sku' => 'nullable|string',			

			//
			'name' => 'required|string',
            'slug' => 'required',
            'name_tag' => 'nullable|string',
            'name_seo' => 'nullable|string',
            'h1' => 'nullable|string',

            //
            'menu' => 'nullable',

            //
            'prev_h1' => 'nullable',
            'prev_h2' => 'nullable',
            'link_landing' => 'nullable',

			//
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id', // .* - выбираем все что в array "tag_ids"

            
			//
            'knot_1' => 'nullable',

			//
            'order' => 'nullable|integer',
            'status' => 'nullable|integer',
            'published' => 'nullable|integer',

			//
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'canonical' => 'nullable|string',


			//
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'deleted_at' => 'nullable',
        ];
    }
}
