<?php

namespace App\Services\ADMIN\Paper;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//


// !!!!!!!!!!!!!!!!
use App\Models\Paper;
// use App\Models\Category;
// use App\Models\Tag;


class Service {


	public function update($post,$param) {

		try {
			DB::beginTransaction();

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);
			
			//
			isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';
			isset($param['mafia']) ? '' : $param['mafia'] = '0';
				// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
			

			//
			if(isset($param['prev_image']) && !is_string($param['prev_image'])) {
				$param['prev_image'] = Storage::disk('public')->put('/images', $param['prev_image']);
				// $data['prev_image'] = str_replace('public','',Storage::put('/public/images', $data['prev_image']));
			}


			//
			$post->update($param);
			$post->tags()->sync($tagIds); // изменили attach на sync*, 
				// и поместили ниже строки '$post->update($param);'
				// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $post;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	$post = Paper::firstOrCreate($param);
			
			// $post->tags()->attach($tagIds);
				// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $post;

    }
}