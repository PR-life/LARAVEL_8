<?php

namespace App\Http\Requests\ADMIN\Post;

use App\Http\Requests\ADMIN\Post\StoreRequest;
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
            'en_name' => 'nullable|string',
            'en_h1' => 'nullable|string',
            'en_intro' => 'nullable|string',
            'en_text' => 'nullable|string',
            'en_prev_h1' => 'nullable|string',
            'en_prev_h2' => 'nullable|string',
            'en_prev_p' => 'nullable|string',

            'en_title' => 'nullable|string',
            'en_description' => 'nullable|string',
            'en_keywords' => 'nullable|string',
        ]);

    }
}
