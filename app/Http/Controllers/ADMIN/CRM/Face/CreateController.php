<?php

namespace App\Http\Controllers\ADMIN\CRM\Face;

//
use App\Models\Crm;
use App\Models\Group;


class CreateController extends BaseController
{
    public function __invoke(){

        // dd(111);
        $Crm = Crm::all();
        $groups = Group::all();


        return view('zADMIN.PAGE.Face.create',compact('Crm','groups'));
    }
}
