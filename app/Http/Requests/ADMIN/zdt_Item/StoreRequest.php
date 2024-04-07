<?php

namespace App\Http\Requests\ADMIN\zdt_Item;

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
            'name' => 'required|string',
			'slug' => 'string',

            //
            'shema' => 'nullable|string',
			'shema_teaser' => 'nullable|string',
			'css' => 'nullable|string',

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
            'prev_url' => 'nullable|file',

			//
			'mafia' => 'nullable|integer',

            //
            'user_id' => 'nullable|integer',

            //
            'en_name' => 'nullable|string',
            'en_h1' => 'nullable|string',
            'en_intro' => 'nullable|string',
            'en_text' => 'nullable|string',
            'en_prev_h1' => 'nullable|string',
            'en_prev_h2' => 'nullable|string',
            'en_prev_p' => 'nullable|string',
            'en_title' => 'nullable|string',
            'en_description' => 'nullable|string',
            'en_keywords' => 'nullable|string',
            'en_canonical' => 'nullable|string',
        ]);
    }

	// написали сами
	// зарезервированный метод класса Request
	public function messages() {
		// return parent::messages(); // по умолчаиню
		return array_merge(parent::messages(), [
			'name.required' => 'Название поста',
			'prev_image.file' => 'необходимо выбрать файл',
		]);
	}
}
