<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Lego;
use Exception;
use Illuminate\Support\Facades\DB;

class LegoImport implements ToCollection, WithHeadingRow 
{

    public function collection(Collection $collection)
    {
        $params = [];
        $arr = Schema::getColumnListing('lego');

        foreach($arr as $_count => $_value) {
            $params[$_value] = null;
        };

        foreach ($collection as $item) {
            foreach($params as $_name => $_value) {
                $params[$_name] = $item[$_name] ?? null;
            };
 
            
            if(!$params['created_at']) {
                $params['created_at'] = date('Y-m-d H:i:s');
                sleep(1);
            }
            
            // dd($params);

            try {
                DB::beginTransaction();

                // dd($params);

                $ddd = Lego::updateOrCreate([
                    'id' => $params['id'],
                    ],$params);

                    // dd($ddd);
    
                DB::commit();
            } catch (Exception $exception) {
                DB::rollBack();
                dd($exception);
                abort(500);
            }


 
        }
    }
}
