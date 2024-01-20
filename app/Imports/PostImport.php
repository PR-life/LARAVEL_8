<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Post;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class PostImport implements ToCollection, WithHeadingRow 
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			$x = $item['slug'] == null ? $item['sku'] : $item['slug'];

			$featured = $item['featured'] == null ? '0' : $item['featured'];
			$published = $item['published'] == null ? '1' : $item['published'];
			$mafia = $item['mafia'] == null ? '0' : $item['mafia'];
 
			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];

	
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                Post::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    'slug' => $x,

                    'h1' => $item['h1'],
                    'intro' => $item['intro'],
                    'text' => $item['text'],

                    'bread_name' => $item['bread_name'],
                    
                    'prev_h1' => $item['prev_h1'],
                    'prev_h2' => $item['prev_h2'],
                    'prev_p' => $item['prev_p'],


                    'en_name' => $item['en_name'],
                    'en_h1' => $item['en_h1'],
                    'en_intro' => $item['en_intro'],
                    'en_text' => $item['en_text'],
                    'en_prev_h1' => $item['en_prev_h1'],
                    'en_prev_h2' => $item['en_prev_h2'],
                    'en_prev_p' => $item['en_prev_p'],

                    'prev_image' => $item['prev_image'],

                    'knot_1' => $item['knot_1'],

                    'order' => $item['order'],
                    'status' => $item['status'],
                    'views' => $item['views'],

                    'featured' => $featured,
                    'published' => $published,
                    'mafia' => $mafia,

                    'category_id' => $item['category_id'],
                    'user_id' => $item['user_id'],

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
