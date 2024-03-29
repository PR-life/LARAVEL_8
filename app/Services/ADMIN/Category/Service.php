<?php

namespace App\Services\ADMIN\Category;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//


// !!!!!!!!!!!!!!!!
use App\Models\Category;
// use App\Models\Category;
// use App\Models\Tag;


class Service {


	public function update($category,$param) {

		try {
			DB::beginTransaction();

			
			if($param['canonical'] == "/") unset($param['canonical']);
			// dd($param);


			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

 
			
			//
			isset($param['published']) ? '' : $param['published'] = '0';

			//
			$category->update($param);
			$category->tags()->sync($tagIds); // изменили attach на sync*, 
				// и поместили ниже строки '$category->update($param);'
				// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $category;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	// $post = Post::firstOrCreate($param);
			// $post->tags()->attach($tagIds);
			// 	// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		// return $post;

    }
}