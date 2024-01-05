<?php

namespace App\Http\Requests\ADMIN\Faq;

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
			'name' => 'nullable|string',
            'h1' => 'nullable|string',
            'text' => 'nullable|string',

			//
			'en_name' => 'nullable|string',
            'en_h1' => 'nullable|string',
            'en_text' => 'nullable|string',

            //
            'faq_id' => 'nullable|integer|exists:faqs,id',
            'faq_ids' => 'nullable|array',
            'faq_ids.*' => 'nullable|integer|exists:faqs,id',
            'category_id' => 'nullable|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
            
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
