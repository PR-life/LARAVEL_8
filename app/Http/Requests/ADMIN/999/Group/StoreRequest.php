<?php

namespace App\Http\Requests\ADMIN\Group;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
			'sku' => 'nullable',
            'name' => 'required|string|unique:groups',
			'slug' => 'required|string|unique:groups',

			'order' => 'nullable|string',
			'status' => 'nullable|string',
			'published' => 'nullable|string',
        ];
    }
}
