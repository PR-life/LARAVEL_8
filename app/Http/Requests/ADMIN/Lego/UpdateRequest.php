<?php

namespace App\Http\Requests\ADMIN\Lego;

use App\Http\Requests\ADMIN\Lego\StoreRequest;


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
