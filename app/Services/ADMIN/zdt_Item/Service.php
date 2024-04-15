<?php

namespace App\Services\ADMIN\zdt_Item;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//
use App\Http\Filters\ItemFilter;
use App\Services\ADMIN\BaseService;
use App\Models\Item;


class Service extends BaseService {

	public function items($x) {
		$filter = app()->make(ItemFilter::class, ['queryParams' => array_filter($x)]);
		// dd($filter);
	
		return Item::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);
			// $posts = Post::filter($filter)->orderBy('created_at', 'desc')->get();
			// $posts = Post::paginate(10);
	}


	public function update($item,$param) {

		try {
			DB::beginTransaction();


			if($param['canonical'] == "/") unset($param['canonical']);
			
			//
			isset($param['item_ids']) ? $itemIds = $param['item_ids'] : $itemIds = [];
			unset($param['item_ids']);
			
			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);
			
			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			// isset($param['group_ids']) ? $groupIds = $param['group_ids'] : $groupIds = [];
			// unset($param['group_ids']);

			//
			isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';
			isset($param['mafia']) ? '' : $param['mafia'] = '0';
				// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
			

			//
			// if(isset($param['prev_image']) && !is_string($param['prev_image'])) {
			// 	$param['prev_image'] = Storage::disk('public')->put('/images', $param['prev_image']);
			// 	// $data['prev_image'] = str_replace('public','',Storage::put('/public/images', $data['prev_image']));
			// }


			//
			$item->update($param);
			$item->tags()->sync($tagIds); // изменили attach на sync*, 
				// и поместили ниже строки '$item->update($param);'
				// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			$tagIds = [];

			// $item->groups()->sync($groupIds);
			// $groupIds = [];

			$item->items()->sync($itemIds);
			$itemIds = [];

			$item->faqs()->sync($faqIds);
			$faqIds = [];

			$item->categories()->sync($categoryIds);
			$categoryIds = [];


			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $item;
	}

    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	$item = Item::firstOrCreate($param);
			
			// $post->tags()->attach($tagIds);
				// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $item;

    }
}