<?php

namespace App\Http\Requests\ADMIN\User;

use App\Http\Requests\ADMIN\User\StoreRequest;
use Illuminate\Validation\Rule;

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
            'email' => [
                'required',
				'string',
				'email',
                Rule::unique('users')->ignore($this->route('user'))
            ],
            'password' => 'required|string|min:6',
        ]);
    }
}
