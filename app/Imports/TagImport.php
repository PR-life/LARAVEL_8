<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Tag;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class TagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			$x = $item['slug'] == null ? $item['sku'] : $item['slug'];

			$published = $item['published'] == null ? '1' : $item['published'];

			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];
	
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                Tag::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    'slug' => $x,

                    'category_id' => $item['category_id'],

                    'name_2' => $item['name_2'],
                    'name_3' => $item['name_3'],
                    'name_4' => $item['name_4'],
                    'name_5' => $item['name_5'],
                    'name_6' => $item['name_6'],
                    'name_7' => $item['name_7'],
                    'name_8' => $item['name_8'],

                    'en_name' => $item['en_name'],
                    'en_name_2' => $item['en_name_2'],
                    'en_name_3' => $item['en_name_3'],
                    'en_name_4' => $item['en_name_4'],
                    'en_name_5' => $item['en_name_5'],
                    'en_name_6' => $item['en_name_6'],
                    'en_name_7' => $item['en_name_7'],
                    'en_name_8' => $item['en_name_8'],


                    'order' => $item['order'],
                    'status' => $item['status'],
                    'published' => $published,

					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
