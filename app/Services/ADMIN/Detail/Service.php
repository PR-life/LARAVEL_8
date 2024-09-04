<?php

namespace App\Services\ADMIN\Detail;

use Exception;
use Illuminate\Support\Facades\DB;
//
use App\Http\Filters\DetailFilter;
use App\Services\ADMIN\BaseService;
use App\Models\Detail;


class Service extends BaseService {

	public function details($x) {
		$filter = app()->make(DetailFilter::class, ['queryParams' => array_filter($x)]);
	
		return Detail::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);
	}


	public function update($detail,$param) {

		try {
			DB::beginTransaction();


			// dd($param);



			// isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			// unset($param['category_ids']);

			
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
			$detail->update($param);

			// dd($detail);
			// $detail->categories()->sync($categoryIds); // изменили attach на sync*, 
				// и поместили ниже строки '$category->update($param);'
				// *sync - удаляет все привязки которые есть у поста и добавляет те что указали
			// $categoryIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $detail;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

 
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		// return $post;

    }
}