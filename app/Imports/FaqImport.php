<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Faq;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class FaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			// $published = $item['published'] == null ? '1' : $item['published'];

            $created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];
	
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                Faq::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    
                    
                    'filter_par_1' => $item['filter_par_1'],
                    'h1' => $item['h1'],
                    'text' => $item['text'],

                    'en_name' => $item['en_name'],
                    'en_h1' => $item['en_h1'],
                    'en_text' => $item['en_text'],

                    'route_name' => $item['route_name'],

                    'knot_1' => $item['knot_1'],

                    'order' => $item['order'],
                    'status' => $item['status'],
                    'featured' => $item['featured'],

                    'published' => $item['published'],
                    'mafia' => $item['featured'],
                    'faq_id' => $item['faq_id'],
                    'category_id' => $item['category_id'],
                    'group_id' => $item['group_id'],


					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
