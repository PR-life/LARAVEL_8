<?php

namespace App\Services\ADMIN\Product;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//

use App\Models\Product;
use App\Services\ADMIN\BaseService;


class Service extends BaseService {


	public function update($product,$param) {

		try {
			DB::beginTransaction();

			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);
			
			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['lego_ids']) ? $legoIds = $param['lego_ids'] : $legoIds = [];
			unset($param['lego_ids']);

			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);

			isset($param['product_ids']) ? $productIds = $param['product_ids'] : $productIds = [];
			unset($param['product_ids']);

			// dd($faqIds);
			
			//

			if($param['canonical'] == "/") unset($param['canonical']);
			
			isset($param['category_id']) ? '' : $param['category_id'] = null;
			isset($param['tag_id']) ? '' : $param['tag_id'] = null;

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
			$product->update($param);

			$product->categories()->sync($categoryIds);
			$categoryIds = [];

			$product->tags()->sync($tagIds);
			$tagIds = [];

			$product->lego()->sync($legoIds);
			$legoIds = [];

			$product->faqs()->sync($faqIds);
			$faqIds = [];

			$product->products()->sync($productIds); 
			$productIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $product;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	$product = Product::firstOrCreate($param);
			
			// $paper->tags()->attach($tagIds);
				// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $product;

    }
}