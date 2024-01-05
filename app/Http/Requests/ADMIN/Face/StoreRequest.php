<?php

namespace App\Http\Requests\ADMIN\Face;

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
            'h1' => 'nullable|string',
            'text' => 'nullable|string',

            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id', // .* - выбираем все что в array "tag_ids"
            
            'filter_par_1' => 'nullable',

			//
            'knot_1' => 'nullable',

			//
            'order' => 'nullable|integer',
            'status' => 'nullable|integer',
            'featured' => 'nullable|integer',
            'published' => 'nullable|integer',

            //
            'mafia' => 'nullable|integer',


			//
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'deleted_at' => 'nullable',
        ];
    }
}
