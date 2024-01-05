<?php

namespace App\Http\Requests\ADMIN\OOGWAY;

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
            'text_prev' => 'nullable|string',
            'text' => 'nullable|string',
            'text_tz' => 'nullable|string',
            'text_result' => 'nullable|string',


			//
            'oogway_id' => 'nullable|integer',

			//
            'order' => 'nullable|integer',
            'status' => 'nullable|integer',
            'published' => 'nullable|integer',


			//
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'deleted_at' => 'nullable',
        ];
    }
}
