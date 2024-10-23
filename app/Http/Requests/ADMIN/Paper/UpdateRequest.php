<?php

namespace App\Http\Requests\ADMIN\Paper;

use App\Http\Requests\ADMIN\Paper\StoreRequest;

class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }

	
    public function rules()
    {
        return array_merge(parent::rules(), [

            'delete_image' => 'nullable|integer',
        ]);

    }
}
