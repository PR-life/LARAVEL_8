<?php

namespace App\Services\ADMIN\Group;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//


// !!!!!!!!!!!!!!!!
// use App\Models\Category;
// use App\Models\Category;
use App\Models\Group;


class Service {


	public function update($group,$param) {

		try {
			DB::beginTransaction();
			
			//
			// isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';
			// isset($param['mafia']) ? '' : $param['mafia'] = '0';
				// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
			

			//
			// if(isset($param['prev_image']) && !is_string($param['prev_image'])) {
			// 	$param['prev_image'] = Storage::disk('public')->put('/images', $param['prev_image']);
			// 	// $data['prev_image'] = str_replace('public','',Storage::put('/public/images', $data['prev_image']));
			// }

			// dd($param);

			//
			$group->update($param);


			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $group;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			dd($param);
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