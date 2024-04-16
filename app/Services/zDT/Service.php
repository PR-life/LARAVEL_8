<?php

namespace App\Services\zDT;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//

use App\Models\Sms;


class Service {
 
    
    public function getSms() {
        if (!Sms::get()->isEmpty()) {
            $min = 10;
            return Sms::where('published', 1)->get()->random($min);
            // $sms = Sms::where('published', 1)->inRandomOrder()->take($min)->get();
        } else {
            return [];
        }	
    }


    public function convert_h_to_numeric_0($param) {

        function toArray($str){
            return preg_split('//u', $str, -1);
        }
        function split_preg($arr){
            return array_slice($arr, 1, -1);
        }

        $param = toArray($param);
        $param = split_preg($param);
        
        for ($i=0; $i < count($param); $i++){
            
            if($param[$i] != ' ') {
                $param[$i] = '0';
            }
            
        }        
        $param = implode($param);

		return $param;

    }
}