<?php

namespace App\Http\Requests\ADMIN\zdt_Item;

use App\Http\Requests\ADMIN\zdt_Item\StoreRequest;
// use Illuminate\Validation\Rule;

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
            // 'name_en' => 'nullable|string',
            // 'h1_en' => 'nullable|string',
            // 'intro_en' => 'nullable|string',
            // 'text_en' => 'nullable|string',
            // 'prev_h1_en' => 'nullable|string',
            // 'prev_h2_en' => 'nullable|string',
            // 'title_en' => 'nullable|string',
            // 'description_en' => 'nullable|string',
            // 'keywords_en' => 'nullable|string',
        ]);

    }
}
