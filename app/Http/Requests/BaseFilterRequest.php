<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseFilterRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {		
        return [
            'name' => 'nullable',
            'tag' => 'nullable',
        ];
    }
}
