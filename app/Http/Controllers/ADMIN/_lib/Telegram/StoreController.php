<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;

use App\Http\Requests\ADMIN\Paper\StoreRequest;
use App\Services\ADMIN\_lib\Telegram\Service as ServiceTelegram;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){	
    // public function __invoke(){	

		$ServiceTelegram = new ServiceTelegram();


		$param = $request->validated();

		$telegram = $ServiceTelegram->store($param);

		

		return redirect()->route('admin.lib.telegram.edit', $telegram->id);
    }
}
