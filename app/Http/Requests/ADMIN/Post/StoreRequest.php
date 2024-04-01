<?php

namespace App\Http\Requests\ADMIN\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // 'main_image' => 'file',
            // 'tags' => 'nullable',
            // 'tags.*.name' => 'nullable', // зайдий в массив и проверб формат указанных данных


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
            
            'en_name' => 'nullable|string',
            'en_h1' => 'nullable|string',
            'en_intro' => 'nullable|string',
            'en_text' => 'nullable|string',
			'en_prev_h1' => 'nullable|string',
			'en_prev_h2' => 'nullable|string',
			'en_prev_p' => 'nullable|string',

            //
            'prev_image' => 'nullable|file',
            'prev_url' => 'nullable|file',

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
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id', // .* - выбираем все что в array "tag_ids"

            //
            'user_id' => 'nullable|integer',

			//
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',

            'en_title' => 'nullable|string',
            'en_description' => 'nullable|string',
            'en_keywords' => 'nullable|string',
        ];
    }

	//написали сами
	// зарезервированный метод класса Request
	public function messages() {
		// return parent::messages(); // по умолчаиню
		return [
			'name.required' => 'Название поста',
			'category_id.integer' => 'category_id должен быть integer',
			'category_id.exists' => 'такого category_id в таблице categories нет',
			'prev_image.file' => 'необходимо выбрать файл',
		];
	}
}
