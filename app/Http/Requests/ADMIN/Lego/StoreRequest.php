<?php

namespace App\Http\Requests\ADMIN\Lego;

use App\Http\Requests\ADMIN\BaseRelationsRequest;

class StoreRequest extends BaseRelationsRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        return array_merge(parent::rules(), [

            'sku' => 'nullable|string',

            //
			'name' => 'nullable|string',

			'css' => 'nullable|string',
			'add_to_contents' => 'nullable|string',
			'where_to_show' => 'nullable|string',

            'h' => 'nullable|string',
            'text' => 'nullable|string',

            //
            'note' => 'nullable|string',

            
        ]);
    }

	public function messages() {
		// return parent::messages(); // по умолчаиню
		return array_merge(parent::messages(), [
			// 'name.required' => 'Название поста',
		]);
	}
}
