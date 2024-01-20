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
			'sku' => 'nullable|string',
            'name' => 'required|string',
			'slug' => 'string',

			//
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id', // .* - выбираем все что в array "tag_ids"

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
            'user_id' => 'nullable|integer',

			//
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',


            // 'main_image' => 'file',
            // 'tags' => 'nullable',
            // 'tags.*.name' => 'nullable', // зайдий в массив и проверб формат указанных данных
            // 'tag_ids' => 'nullable|array',
            // 'tag_ids.*' => 'nullable|integer|exists:tags,id', // exists должен существовать tag_ids в БД
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
