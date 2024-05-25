<?php

namespace App\Http\Requests\ADMIN\Tag;

use App\Http\Requests\ADMIN\Tag\StoreRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
            'name' => [
                'required',
                Rule::unique('tags')->ignore($this->route('tag'))
            ],
            'slug' => [
                'required',
                Rule::unique('tags')->ignore($this->route('tag'))
            ],

            'name_2' => 'nullable|string',
            'name_3' => 'nullable|string',
            'name_4' => 'nullable|string',
            'name_5' => 'nullable|string',
            'name_6' => 'nullable|string',
            'name_7' => 'nullable|string',
            'name_8' => 'nullable|string',
            
            'intro' => 'nullable|string',

            'en_name' => 'nullable|string',
            'en_name_2' => 'nullable|string',
            'en_name_3' => 'nullable|string',
            'en_name_4' => 'nullable|string',
            'en_name_5' => 'nullable|string',
            'en_name_6' => 'nullable|string',
            'en_name_7' => 'nullable|string',
            'en_name_8' => 'nullable|string',

        ]);
		

    }
}