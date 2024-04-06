<?php

namespace App\Http\Requests\ADMIN\Faq;

use App\Http\Requests\ADMIN\BaseRelationsRequest;

class StoreRequest extends BaseRelationsRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        return array_merge(parent::rules(), [

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
            'faq_id' => 'nullable|integer|exists:faqs,id',

        ]);
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return array_merge(parent::messages(), [
			// 'name.required' => 'Название поста',
		]);
	}
}
