<?php

namespace App\Http\Requests\ADMIN\zdt_Item;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
			'sku' => 'nullable|string',
            'name' => 'nullable|string',
			'slug' => 'string',

			//
			'shema' => 'nullable|string',
			'shema_teaser' => 'nullable|string',
			'css' => 'nullable|string',

			//
            'type' => 'nullable|string',
            'action' => 'nullable|string',
            'face' => 'nullable|string',

			//
            'name_tag' => 'nullable|string',
            'name_seo' => 'nullable|string',
            'h1' => 'nullable|string',
			'h2' => 'nullable|string',
			'intro' => 'nullable|string',
            'article' => 'nullable|string',
            'details_1' => 'nullable|string',
            'details_2' => 'nullable|string',

            //
			'bread_name' => 'nullable',
			
			'prev_h1' => 'nullable|string',
			'prev_h2' => 'nullable|string',
			'prev_p' => 'nullable|string',
            'prev_image' => 'nullable|file',
			'prev_url' => 'nullable|string',

			//
            'menu_kite' => 'nullable|string',

			//
			'param_report' => 'nullable|string',
			'param_duration' => 'nullable|string',
			'param_geo' => 'nullable|string',
			'param_price' => 'nullable|string',

			//
			'knot_1' => 'nullable|string',
	
			//
			'order' => 'nullable|integer',	
			'status' => 'nullable|integer',	
			'views' => 'nullable|integer',	
			'featured' => 'nullable|integer',		
			'published' => 'nullable|integer',
            
			//
			'mafia' => 'nullable|integer',	
            
            //
            'group_id' => 'nullable|integer|exists:groups,id',
            'tag_id' => 'nullable|integer|exists:tags,id',
            'category_id' => 'nullable|integer|exists:categories,id',

            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',

			//
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',

            'canonical' => 'nullable|string',
        ];
    }

	//написали сами
	// зарезервированный метод класса Request
	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			// 'name.required' => 'Название поста',
			// 'category_id.integer' => 'category_id должен быть integer',
			// 'category_id.exists' => 'такого category_id в таблице categories нет',
			// 'prev_image.file' => 'необходимо выбрать файл',
		];
	}
}
