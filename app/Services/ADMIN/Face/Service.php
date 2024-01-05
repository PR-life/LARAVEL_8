<?php

namespace App\Services\ADMIN\Face;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//


// !!!!!!!!!!!!!!!!
use App\Models\Faq;
// use App\Models\Category;
// use App\Models\Tag;


class Service {


	public function update($faq,$param) {

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
			$faq->update($param);
			$faq->tags()->sync($tagIds); // изменили attach на sync*, 
				// и поместили ниже строки '$faq->update($param);'
				// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $faq;
	}



    // public function store($param) {
	// 	try {
	// 		DB::beginTransaction();

	// 		isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
	// 		unset($param['tag_ids']);

    //     	$faq = Post::firstOrCreate($param);
	// 		$faq->tags()->attach($tagIds);
	// 			// attach: Присоединение / Отсоединение отношений Многие ко многим
	// 		$tagIds = [];
			
	// 		DB::commit();
	// 	} catch (Exception $exception) {
	// 		DB::rollBack();
	// 		dd($exception);
    //         abort(500);
	// 	}

	// 	return $faq;

    // }
}