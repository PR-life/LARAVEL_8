<?php

namespace App\Http\Requests\Paper;

use App\Http\Requests\BaseFilterRequest; 

class FilterRequest extends BaseFilterRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {		
        return array_merge(parent::rules(), [

        ]);
    }
}
