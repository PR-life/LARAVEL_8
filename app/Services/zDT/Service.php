<?php

namespace App\Services\zDT;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//

use App\Models\Item;


class Service {

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