<?php

namespace App\Services\ADMIN\_lib\Collection;

use Exception;
use Illuminate\Support\Facades\DB;
//

use App\Models\_child\Collection;
use App\Services\ADMIN\BaseService;


class Service extends BaseService {


	public function update($collection,$param) {

		try {
			DB::beginTransaction();


			// dd($param);


			if($param['canonical'] == "/") unset($param['canonical']);
			isset($param['published']) ? '' : $param['published'] = '0';



				// $collection->categories()->sync($param['category_ids'] ?? []);
				// unset($param['category_ids']);

				// $collection->faqs()->sync($param['faq_ids'] ?? []);
				// unset($param['faq_ids']);

				// $collection->items()->sync($param['item_ids'] ?? []);
				// unset($param['item_ids']);

				// $collection->lego()->sync($param['lego_ids'] ?? []);
				// unset($param['lego_ids']);

				// $collection->services()->sync($param['service_ids'] ?? []);
				// unset($param['service_ids']);

				// $collection->tags()->sync($param['tag_ids'] ?? []);
				// unset($param['tag_ids']);

 
 
 
 



			$collection->update($param);


			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $collection;
	}


    public function store($param) {
		try {
			DB::beginTransaction();


        	$collection = Collection::firstOrCreate($param);
			
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $collection;

    }

	

}