<?php

namespace App\Http\Controllers\ADMIN\CRM\Customer;

//
use App\Models\Face;


class DeleteController extends BaseController
{
    public function __invoke(Faq $faq){
        $faq->delete();
        return redirect()->back();
    }
}
