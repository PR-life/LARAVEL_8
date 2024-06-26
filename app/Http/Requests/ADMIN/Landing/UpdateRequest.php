<?php

namespace App\Http\Requests\ADMIN\Landing;

use App\Http\Requests\ADMIN\Landing\StoreRequest;
// use Illuminate\Validation\Rule;

class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }
	
    public function rules()
    {

        return array_merge(parent::rules(), [
            // 'canonical' => 'nullable|string',
            // 'en_h1' => 'nullable|string',
            // 'en_intro' => 'nullable|string',
            // 'en_text' => 'nullable|string',
            // 'en_prev_h1' => 'nullable|string',
            // 'en_prev_h2' => 'nullable|string',
            // 'en_prev_p' => 'nullable|string',

            // 'en_title' => 'nullable|string',
            // 'en_description' => 'nullable|string',
            // 'en_keywords' => 'nullable|string',

            // 'en_ogp_title' => 'nullable|string',
            // 'en_ogp_description' => 'nullable|string',
        ]);

    }
}
