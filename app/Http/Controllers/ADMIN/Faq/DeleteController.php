<?php

namespace App\Http\Controllers\ADMIN\Faq;

//
use App\Models\Faq;


class DeleteController extends BaseController
{
    public function __invoke(Faq $faq){
        $faq->delete();
        return redirect()->back();
    }
}
