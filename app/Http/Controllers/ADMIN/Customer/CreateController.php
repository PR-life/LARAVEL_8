<?php

namespace App\Http\Controllers\ADMIN\Customer;

use App\Http\Controllers\Controller;


class CreateController extends BaseController
{
    public function __invoke(){

        return view('zADMIN.PAGE.Paper.create');
    }
}
