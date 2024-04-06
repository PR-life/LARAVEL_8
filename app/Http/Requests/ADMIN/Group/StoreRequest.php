<?php

namespace App\Http\Requests\ADMIN\Group;

use App\Http\Requests\ADMIN\BaseRequest;

class StoreRequest extends BaseRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
			'sku' => 'nullable',
            'name' => 'required|string|unique:groups',
			'slug' => 'required|string|unique:groups',
        ]);
    }
}
