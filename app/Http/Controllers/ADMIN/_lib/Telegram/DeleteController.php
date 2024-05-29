<?php

namespace App\Http\Controllers\ADMIN\_lib\Telegram;

use App\Models\Paper;


class DeleteController extends BaseController
{
    public function __invoke(Paper $paper){
        $paper->delete();
        return redirect()->back();
    }
}
