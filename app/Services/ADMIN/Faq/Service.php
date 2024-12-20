<?php

namespace App\Services\ADMIN\Faq;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//
//
use App\Models\Faq;
use App\Services\ADMIN\BaseService;
use App\Http\Filters\FaqFilter;


class Service extends BaseService {


	public function faqs($x) {
 
		$filter = app()->make(FaqFilter::class, ['queryParams' => array_filter($x)]);


		return Faq::filter($filter);

        // $paginator = true;
         
        // if(request()->get('tag_id')) {
        //     $tag = Tag::whereId(request()->get('tag_id'))->firstOrFail();
        //     $faqs = $tag->faqs;
        //     $paginator = false;

        // } else {
        //     $faqs = Faq::filter($filter)->whereNull('faq_id')->orderBy('created_at', 'DESC')->paginate(80);
        // }
	}

	public function update($faq,$param) {

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
			$faq->update($param);

			//
			$faq->groups()->sync($groupIds);
			$groupIds = [];

			$faq->tags()->sync($tagIds);
			$tagIds = [];
			
			$faq->categories()->sync($categoryIds);
			$categoryIds = [];

			$faq->faqs()->sync($faqIds);
			$faqIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $faq;
	}



    // public function store($param) {
	// 	try {
	// 		DB::beginTransaction();

	// 		isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
	// 		unset($param['tag_ids']);

    //     	$faq = Post::firstOrCreate($param);
	// 		$faq->tags()->attach($tagIds);
	// 			// attach: Присоединение / Отсоединение отношений Многие ко многим
	// 		$tagIds = [];
			
	// 		DB::commit();
	// 	} catch (Exception $exception) {
	// 		DB::rollBack();
	// 		dd($exception);
    //         abort(500);
	// 	}

	// 	return $faq;

    // }
}