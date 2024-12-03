<?php

namespace App\Services\ADMIN\Telegram;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\ADMIN\BaseService;
//
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
//
use App\Models\_child\Telegram;


class Service extends BaseService {


	public function update($paper,$param) {

		try {
			DB::beginTransaction();


			if($param['canonical'] == "/") unset($param['canonical']);
			
			isset($param['category_id']) ? '' : $param['category_id'] = null;
			isset($param['tag_id']) ? '' : $param['tag_id'] = null;

			isset($param['pin']) ? '' : $param['pin'] = '0';
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

			$paper->update($param);

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $paper;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

        	$paper = Telegram::firstOrCreate($param);
						
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $paper;

    }
}