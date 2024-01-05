<?php

namespace App\Http\Requests\ADMIN\postman\Paper;

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
            'name' => 'required|string',
            'h1' => 'nullable|string',
            'text' => 'required|string',
            'answer' => 'nullable|string',
            'answer_user_name' => 'nullable|string',
			'user_id' => 'required|integer',
			'item_id' => 'required|integer',
			'order' => 'nullable|integer',
			'published' => 'nullable|integer',
        ];
    }
}
