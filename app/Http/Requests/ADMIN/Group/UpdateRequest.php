<?php

namespace App\Http\Requests\ADMIN\Group;

use App\Http\Requests\ADMIN\Group\StoreRequest;
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
                Rule::unique('groups')->ignore($this->route('group'))
            ],
            'slug' => [
                'required',
                Rule::unique('groups')->ignore($this->route('group'))
            ],

        ]);
		

    }
}