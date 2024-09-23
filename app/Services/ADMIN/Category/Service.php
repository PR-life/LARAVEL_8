<?php

namespace App\Services\ADMIN\Category;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\ADMIN\BaseService;

// use App\Models\Category;

class Service extends BaseService{

	public function update($category,$param) {

		try {
			DB::beginTransaction();

			
			if($param['canonical'] == "/") unset($param['canonical']);
			// dd($param);


			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);

			isset($param['lego_ids']) ? $legoIds = $param['lego_ids'] : $legoIds = [];
			unset($param['lego_ids']);

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);

			isset($param['item_ids']) ? $itemIds = $param['item_ids'] : $itemIds = [];
			unset($param['item_ids']);

			isset($param['service_ids']) ? $serviceIds = $param['service_ids'] : $serviceIds = [];
			unset($param['service_ids']);
			
			//
			isset($param['published']) ? '' : $param['published'] = '0';

			// dd($itemIds);
			//
			$category->update($param);
			$category->categories()->sync($categoryIds);
			$category->tags()->sync($tagIds);
			$category->lego()->sync($legoIds);
			$category->thisItemsPivot()->sync($itemIds);
			$category->thisServicesPivot()->sync($serviceIds);
			$tagIds = [];


			$category->update($param);
			$category->faqs()->sync($faqIds);
			$faqIds = [];


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