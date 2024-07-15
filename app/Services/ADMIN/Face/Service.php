<?php

namespace App\Services\ADMIN\Face;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//
use App\Models\_lib\Clothe;



class Service {



	
	public function temporary_update($face,$validator1,$validator2) {

		if(isset($validator1['year']) && isset($validator1['month']) && isset($validator1['day'])) {
			if($validator1['year'] && $validator1['month'] && $validator1['day']) {
				$birthday = sprintf('%04d-%02d-%02d', $validator1['year'], $validator1['month'], $validator1['day']);
				$validator1['birthday'] = $birthday;
			}
		};

		unset($validator1['year']);
		unset($validator1['month']);
		unset($validator1['day']);

		// dd($validator1);
		$face->update($validator1);


		$size = Clothe::firstOrCreate([
			'face_id' => $face->id,
		]);
		$size->update($validator2);




	}




	public function update($face,$param) {

		try {
			DB::beginTransaction();

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);
			
			//
			isset($param['published']) ? '' : $param['published'] = '0';
			isset($param['mafia']) ? '' : $param['mafia'] = '0';

			//
			$face->update($param);
			$face->tags()->sync($tagIds); // изменили attach на sync*, 
			// 	// и поместили ниже строки '$faq->update($param);'
			// 	// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $face;
	}

}