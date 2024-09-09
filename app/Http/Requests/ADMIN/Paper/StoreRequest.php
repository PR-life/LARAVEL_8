<?php

namespace App\Http\Requests\ADMIN\Paper;

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
            'name' => 'nullable|string',
			'slug' => 'string',

			'mockup' => 'nullable|string',
			'shema' => 'nullable|string',
			'shema_teaser' => 'nullable|string',
			'css' => 'nullable|string',

			'name_tag' => 'nullable|string',
			'name_seo' => 'nullable|string',

			//
            'h1' => 'nullable|string',
            'text' => 'nullable|string',
            'article' => 'nullable|string',
            'contents' => 'nullable|string',

            //
			'answer' => 'nullable|string',
			'answer_user_name' => 'nullable|string',

			//
			'bread_name' => 'nullable',

			//
			'prev_h1' => 'nullable|string',
			'prev_h2' => 'nullable|string',
			'prev_p' => 'nullable|string',
            'prev_image' => 'nullable',
            // 'prev_image' => 'nullable|file',
			'prev_url' => 'nullable|string',
			'prev_veil' => 'nullable|string',

            //
			'foto_count_teaser' => 'nullable|integer',
			'foto_count_full' => 'nullable|integer',

			//
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
			'price' => 'nullable|string',
     
			//
			'mafia' => 'nullable|integer',	
            
            //
			'user_id' => 'required|integer',
			
        ]);
    }

	public function messages() {
		return [
			'name.required' => 'Название поста',
			'prev_image.file' => 'необходимо выбрать файл',
		];
	}
}
