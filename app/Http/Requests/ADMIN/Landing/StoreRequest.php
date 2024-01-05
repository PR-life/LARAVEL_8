<?php

namespace App\Http\Requests\ADMIN\Landing;

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

			//
            'category_id' => 'nullable|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',

			//
            'h1' => 'nullable|string',
            'intro' => 'nullable|string',
            'text' => 'nullable|string',
            
			//
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
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',

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
