<?php

namespace App\Services\ADMIN\Paper;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//

use App\Models\Paper;


class Service {


	public function update($paper,$param) {

		try {
			DB::beginTransaction();

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['item_ids']) ? $itemIds = $param['item_ids'] : $itemIds = [];
			unset($param['item_ids']);


			// dd($itemIds);
			
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
			$paper->update($param);
			$paper->tags()->sync($tagIds); // изменили attach на sync*, 
				// и поместили ниже строки '$paper->update($param);'
				// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			$paper->items()->sync($itemIds); 
			$itemIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $paper;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	$paper = Paper::firstOrCreate($param);
			
			// $paper->tags()->attach($tagIds);
				// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $paper;

    }
}