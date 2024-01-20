<?php

namespace App\Http\Requests\ADMIN\Paper;

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
            'name' => 'nullable|string',
			'slug' => 'string',

			//
            'h1' => 'nullable|string',
            'text' => 'nullable|string',
            'article' => 'nullable|string',

            //
			'answer' => 'nullable|string',
			'answer_user_name' => 'nullable|string',

            //
			'css' => 'nullable|string',
			'shema' => 'nullable|string',
			'shema_teaser' => 'nullable|string',

			//
			'bread_name' => 'nullable',
			
			'prev_h1' => 'nullable|string',
			'prev_h2' => 'nullable|string',
			'prev_p' => 'nullable|string',

            //
			'foto_count_teaser' => 'nullable|integer',
			'foto_count_full' => 'nullable|integer',

			//
            'prev_image' => 'nullable|file',
            'url_foto' => 'nullable|string',
            'url_video' => 'nullable|string',
			
			//
            'link_media' => 'nullable|string',
            'link_media_name' => 'nullable|string',

            //
			'demon_name' => 'nullable|string',
			'demon_par_1' => 'nullable|string',
			'demon_par_2' => 'nullable|string',
			'demon_par_3' => 'nullable|string',


			//
			'knot_1' => 'nullable|string',
	

			//
			'order' => 'nullable|integer',	
			'status' => 'nullable|integer',		
			'featured' => 'nullable|integer',		
			'published' => 'nullable|integer',
            
            
			//
			'mafia' => 'nullable|integer',	
            
            //
			'user_id' => 'required|integer',
            'category_id' => 'nullable|integer|exists:categories,id', // exists:существует в тбл categories в колонке id
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id', // .* - выбираем все что в array "tag_ids"


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
			'name.required' => 'Название поста',
			'category_id.integer' => 'category_id должен быть integer',
			'category_id.exists' => 'такого category_id в таблице categories нет',
			'prev_image.file' => 'необходимо выбрать файл',
		];
	}
}
