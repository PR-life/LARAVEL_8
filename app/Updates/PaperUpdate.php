<?php

namespace App\Updates;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Paper;

class PaperUpdate implements ToCollection, WithHeadingRow 
{

    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {


            $params = [];
            $arr = Schema::getColumnListing('papers');
    
            foreach($arr as $_count => $_value) {
                $params[$_value] = null;
            };
    
            // dd($params);
    
            foreach ($collection as $item) {
                // dd($item);
                foreach($params as $_name => $_value) {
                    $params[$_name] = $item[$_name] ?? null;
                };
    
                // dd($params);

                // unset($params['deleted_at']);

                foreach ($params as $key => $value) {
                    // dd($_name);

                    if($params[$key] == null) {
                        // dd(111);
                        unset($params[$key]);
                    }

                }


                // dd($params);


            
                Paper::updateOrCreate([
                    'sku' => $item['sku'],
                ],$params);
                // Paper::withTrashed()->updateOrCreate([
                //     'id' => $item['id'],
                // ],$params);

            }
        }
    }
}
