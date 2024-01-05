<?php

namespace App\Http\Requests\ADMIN\Category;

use App\Http\Requests\ADMIN\Category\StoreRequest;


class UpdateRequest extends StoreRequest
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
        return array_merge(parent::rules(), [
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
