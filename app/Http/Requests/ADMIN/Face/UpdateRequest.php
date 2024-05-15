<?php

namespace App\Http\Requests\ADMIN\Face;

use App\Http\Requests\ADMIN\Face\StoreRequest;


class UpdateRequest extends StoreRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
			'name' => 'required|string',
            'surname' => 'required|string',
        ]);
    }
}
