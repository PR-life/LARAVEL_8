<?php

namespace App\Services\ADMIN\Face;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//

class Service {


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