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

            'filter_par_1' => 'nullable',
            'css' => 'nullable',
            'css_summary' => 'nullable',
            'css_content' => 'nullable',

			//
			'name' => 'nullable|string',
            'h1' => 'nullable|string',
            'text' => 'nullable|string',

			//
			'en_name' => 'nullable|string',
            'en_h1' => 'nullable|string',
            'en_text' => 'nullable|string',

            //
            'route_name' => 'nullable|string',

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
            'group_id' => 'nullable|integer|exists:groups,id',
            'tag_id' => 'nullable|integer|exists:tags,id',
            'category_id' => 'nullable|integer|exists:categories,id',
            'faq_id' => 'nullable|integer|exists:faqs,id',

            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',

            'category_ids' => 'nullable|array',
            'category_ids.*' => 'nullable|integer|exists:categories,id',

            'faq_ids' => 'nullable|array',
            'faq_ids.*' => 'nullable|integer|exists:faqs,id',

			//
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'deleted_at' => 'nullable',
        ];
    }
}
