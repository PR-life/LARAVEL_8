<?php

namespace App\Http\Requests\ADMIN\Category;

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
			'name' => 'required|string',
            'slug' => 'required',
            
            'name_tag' => 'nullable|string',
            'name_seo' => 'nullable|string',
            'h1' => 'nullable|string',
            'intro' => 'nullable|string',
            'text' => 'nullable|string',

            //
            // 'menu' => 'nullable',

            //
            'bread_name' => 'nullable',

            'prev_h1' => 'nullable',
            'prev_h2' => 'nullable',
            'prev_p' => 'nullable',
            'prev_url' => 'nullable',
 
			//
            'text_top' => 'nullable|string',
            'text_bottom' => 'nullable|string',
            'string_1' => 'nullable|string',

            //
			'en_name' => 'nullable|string',
            'en_name_tag' => 'nullable|string',
            'en_name_seo' => 'nullable|string',
            'en_h1' => 'nullable|string',

            'en_title' => 'nullable|string',
            'en_description' => 'nullable|string',
            'en_keywords' => 'nullable|string',
            'en_canonical' => 'nullable|string',

        ]);
    }
}
