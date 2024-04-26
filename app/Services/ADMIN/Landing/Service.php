<?php

namespace App\Services\ADMIN\Landing;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//
use App\Http\Filters\LandingFilter;
use App\Models\Landing;
use App\Services\ADMIN\BaseService;

class Service extends BaseService  {


	public function update($landing,$param) {

		try {
			DB::beginTransaction();

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);

			isset($param['item_ids']) ? $itemIds = $param['item_ids'] : $itemIds = [];
			unset($param['item_ids']);


			//
			if($param['canonical'] == "/") unset($param['canonical']);
			
			isset($param['category_id']) ? '' : $param['category_id'] = null;
			isset($param['tag_id']) ? '' : $param['tag_id'] = null;

			isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';


			//
			$landing->update($param);

			$landing->tags()->sync($tagIds);
			$tagIds = [];
			
			$landing->faqs()->sync($faqIds);
			$faqIds = [];

			$landing->items()->sync($itemIds); 
			$itemIds = [];


			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $landing;
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