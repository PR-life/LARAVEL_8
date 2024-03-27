<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Oogway;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class OogwayImport implements ToCollection, WithHeadingRow 
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];


            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                Oogway::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'name' => $item['name'],

                    'text_prev' => $item['text_prev'],
                    'text' => $item['text'],
                    'text_tz' => $item['text_tz'],
                    'text_result' => $item['text_result'],

                    'oogway_id' => $item['oogway_id'],

                    'order' => $item['order'],
                    'status' => $item['status'],

                    'published' => $item['published'],

                    
					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
