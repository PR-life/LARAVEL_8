<?php

namespace App\Services\Sms;

// use Exception;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Storage;
//

//

use App\Models\Sms;



class Service {


	public function update($param) {

        // dd($param);

        if(strlen($param['title']) > 1) {
            return view('zPAGE.Lol', compact('param'));
        } else {
            unset($param['title']);
            // isset($param['name']) == null ? $param['name'] = "форма без имени333" : '';
        }

        // dd($param);
		return $param;
	}



	public function create($param) {

        // dd($param);
        if(strlen($param['title']) > 1) {
            return view('zPAGE.Lol', compact('param'));
        } else {
            unset($param['title']);
        }

        // dd($param['label']);

        switch ($param['label']) {
            case 'order':
                $param['name'] ?? ($param['name'] = 'без имени');
                break;
            case 'quiz':
                $param['name'] ?? ($param['name'] = 'не заполнили');
                break;
            case 'callback':
                $param['name'] ?? ($param['name'] = 'без имени');
                break;
            case 'email':
                $param['name'] ?? ($param['name'] = 'без имени');
                break;
            case 'ask':
                $param['name'] ?? ($param['name'] = 'без имени');
                break;
        }
        // dd($param);

        $sms = Sms::create($param);
		return $sms;
	}

}