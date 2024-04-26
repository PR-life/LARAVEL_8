<?php

namespace App\Http\Requests\ADMIN\Landing;

use App\Http\Requests\ADMIN\BaseRelationsRequest;

class StoreRequest extends BaseRelationsRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
			'sku' => 'nullable|string',
            'name' => 'required|string',

			//
            'h1' => 'nullable|string',
            'intro' => 'nullable|string',
            'text' => 'nullable|string',
            
			//
            'bread_name' => 'nullable',
            
			'prev_h1' => 'nullable|string',
			'prev_h2' => 'nullable|string',
			'prev_p' => 'nullable|string',
            'prev_image' => 'nullable|file',
            'prev_url' => 'nullable|string',


            //
            'ogp_type' => 'nullable|string',
            'ogp_image' => 'nullable|string',
            'ogp_title' => 'nullable|string',
            'ogp_description' => 'nullable|string',
        ];
    }

	//написали сами
	// зарезервированный метод класса Request
	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			'name.required' => 'Название лендинга',
			'category_id.integer' => 'category_id должен быть integer',
			'category_id.exists' => 'такого category_id в таблице categories нет',
			'prev_image.file' => 'необходимо выбрать файл',
		];
	}
}
