<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Category;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class CategoryImport implements ToCollection, WithHeadingRow 
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
                Category::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    'slug' => $x,

                    'name_tag' => $item['name_tag'],
                    'name_seo' => $item['name_seo'],
                    'h1' => $item['h1'],

                    'en_name' => $item['en_name'],
                    'en_name_tag' => $item['en_name_tag'],
                    'en_name_seo' => $item['en_name_seo'],
                    'en_h1' => $item['en_h1'],

                    'menu' => $item['menu'],

                    'prev_h1' => $item['prev_h1'],
                    'prev_h2' => $item['prev_h2'],
                    'link_landing' => $item['link_landing'],

                    'category_id' => $item['category_id'],

                    'knot_1' => $item['knot_1'],

                    'order' => $item['order'],
                    'status' => $item['status'],

                    'published' => $published,

                    'title' => $item['title'],
                    'description' => $item['description'],
                    'keywords' => $item['keywords'],
                    'canonical' => $item['canonical'],

                    'en_title' => $item['en_title'],
                    'en_description' => $item['en_description'],
                    'en_keywords' => $item['en_keywords'],
                    'en_canonical' => $item['en_canonical'],

					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
