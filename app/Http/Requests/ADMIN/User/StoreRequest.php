<?php

namespace App\Http\Requests\ADMIN\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'sku' => 'nullable|string',
            'role' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
			// убрали, на старте настроили создание Пароля на автомате
            // 'password' => 'required|string|min:6',
            // 'password' => 'string|min:6',
			'nickname' => 'nullable|string',
			'avatar' => 'nullable|string',
			// 'avatar' => 'nullable|file',
			'user_par_1' => 'nullable|string',
			'user_par_2' => 'nullable|string',
			'user_par_3' => 'nullable|string',
			//
			'order' => 'nullable|integer',
			'status' => 'nullable|integer',
			'published' => 'nullable|integer',
			'mafia' => 'nullable|integer',
        ];
    }
}
