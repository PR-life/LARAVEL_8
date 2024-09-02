<?php

namespace App\Http\Requests\ADMIN\Feature;

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
                Rule::unique('features')->ignore($this->route('feature'))
            ],
            'slug' => [
                'required',
                Rule::unique('features')->ignore($this->route('feature'))
            ],

            'prev_image' => 'nullable|string',
            
        ]);
		

    }
}