<?php

namespace App\Services\ADMIN\Detail;

use Exception;
use Illuminate\Support\Facades\DB;
//
use App\Http\Filters\DetailFilter;
use App\Services\ADMIN\BaseService;
//
use App\Models\Detail;


class Service extends BaseService {

	public function details($x) {
		$filter = app()->make(DetailFilter::class, ['queryParams' => array_filter($x)]);
	
		return Detail::filter($filter)->orderBy('order', 'asc')->orderBy('created_at', 'DESC')->paginate(25);
	}


	public function update($detail,$param) {

		try {
			DB::beginTransaction();

			isset($param['published']) ? '' : $param['published'] = '0';
			$detail->update($param);
			//

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
			$detail = Detail::firstOrCreate($param);
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $detail;

    }
}