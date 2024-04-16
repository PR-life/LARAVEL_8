<?php

namespace App\Http\Requests\ADMIN\User;

use App\Http\Requests\ADMIN\User\StoreRequest;
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
            'email' => [
                'required',
				'string',
				'email',
                Rule::unique('users')->ignore($this->route('user'))
            ],
            'new_password' => 'nullable|string|min:6',
        ]);
    }
}
