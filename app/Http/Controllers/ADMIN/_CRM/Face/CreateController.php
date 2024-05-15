<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;

//
use App\Models\CRM\Crm;
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
