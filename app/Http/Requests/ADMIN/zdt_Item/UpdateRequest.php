<?php

namespace App\Http\Requests\ADMIN\zdt_Item;

use App\Http\Requests\ADMIN\Post\StoreRequest;
// use Illuminate\Validation\Rule;

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
