<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Group;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class GroupImport implements ToCollection, WithHeadingRow 
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
                Group::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    'slug' => $x,

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
