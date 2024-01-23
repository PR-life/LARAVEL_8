<?php

namespace App\Services\ADMIN\Sms;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//


// !!!!!!!!!!!!!!!!
use App\Models\Sms;


class Service {


	public function update($sms,$param) {

		try {
			DB::beginTransaction();

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);
			
			// //
			isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';
			isset($param['mafia']) ? '' : $param['mafia'] = '0';
			// 	// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
			

			// //
			$sms->update($param);
			$sms->tags()->sync($tagIds); // изменили attach на sync*, 
			// 	// и поместили ниже строки '$sms->update($param);'
			// 	// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $sms;
	}



    // public function store($param) {
	// 	try {
	// 		DB::beginTransaction();

	// 		isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
	// 		unset($param['tag_ids']);

    //     	$sms = Post::firstOrCreate($param);
	// 		$sms->tags()->attach($tagIds);
	// 			// attach: Присоединение / Отсоединение отношений Многие ко многим
	// 		$tagIds = [];
			
	// 		DB::commit();
	// 	} catch (Exception $exception) {
	// 		DB::rollBack();
	// 		dd($exception);
    //         abort(500);
	// 	}

	// 	return $sms;

    // }
}