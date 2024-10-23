<?php

namespace App\Http\Requests\PAGE\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
		// dd(11);
        return [
            'comments' => 'nullable',
            'answer' => 'nullable',
            'schema' => 'nullable',
            'schema_teaser' => 'nullable',
            'status' => 'nullable',
            'tag' => 'nullable',
            'reviews' => 'nullable',
        ];
    }
}
