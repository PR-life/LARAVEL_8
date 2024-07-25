<?php

namespace App\Services\ADMIN\Lego;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//
//
use App\Models\Lego;
use App\Services\ADMIN\BaseService;
use App\Http\Filters\LegoFilter;


class Service extends BaseService {


	public function lego($x) {
 
		$filter = app()->make(LegoFilter::class, ['queryParams' => array_filter($x)]);

		return Lego::filter($filter);
	}

	public function update($lego,$param) {

		try {
			DB::beginTransaction();

			// dd($param);

			//
			isset($param['group_ids']) ? $groupIds = $param['group_ids'] : $groupIds = [];
			unset($param['group_ids']);

			//
			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);


			//
			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);

			//
			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);
			
			//
			isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';
			isset($param['mafia']) ? '' : $param['mafia'] = '0';
				// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
			

			//
			$lego->update($param);

			//
			$lego->groups()->sync($groupIds);
			$groupIds = [];

			$lego->tags()->sync($tagIds);
			$tagIds = [];
			
			$lego->categories()->sync($categoryIds);
			$categoryIds = [];

			// $lego->faqs()->sync($faqIds);
			// $faqIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $lego;
	}

}