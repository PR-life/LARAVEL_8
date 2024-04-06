<?php

namespace App\Http\Requests\ADMIN\Faq;

use App\Http\Requests\ADMIN\Faq\StoreRequest;


class UpdateRequest extends StoreRequest
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
