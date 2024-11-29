<?php

namespace App\Http\Requests\ADMIN\Product;

use App\Http\Requests\ADMIN\BaseFilterRequest; 


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
