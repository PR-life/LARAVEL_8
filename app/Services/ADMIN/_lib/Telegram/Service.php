<?php

namespace App\Services\ADMIN\_lib\Telegram;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//

use App\Models\_child\Telegram;
use App\Services\ADMIN\BaseService;


class Service extends BaseService {


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