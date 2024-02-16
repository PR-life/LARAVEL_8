<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Paper;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class PaperImport implements ToCollection, WithHeadingRow 
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			$x = $item['slug'] == null ? $item['sku'] : $item['slug'];

			// $featured = $item['featured'] == null ? '0' : $item['featured'];
			// $published = $item['published'] == null ? '1' : $item['published'];
			// $mafia = $item['mafia'] == null ? '0' : $item['mafia'];
 
			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];

	
            
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                Paper::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    'slug' => $x,

                    'shema' => $item['shema'],
                    'shema_teaser' => $item['shema_teaser'],
                    'css' => $item['css'],

                    'h1' => $item['h1'],
                    'text' => $item['text'],
                    'article' => $item['article'],
                    'answer' => $item['answer'],
                    'answer_user_name' => $item['answer_user_name'],

                    'bread_name' => $item['bread_name'],
                    
                    'prev_h1' => $item['prev_h1'],
                    'prev_h2' => $item['prev_h2'],
                    'prev_p' => $item['prev_p'],
                    'prev_image' => $item['prev_image'],
                    'prev_url' => $item['prev_url'],
                    'prev_veil' => $item['prev_veil'],
                    
                    'foto_count_teaser' => $item['foto_count_teaser'],
                    'foto_count_full' => $item['foto_count_full'],
                    'url_foto' => $item['url_foto'],
                    'url_video' => $item['url_video'],

                    'link_media' => $item['link_media'],
                    'link_media_name' => $item['link_media_name'],

                    'demon_name' => $item['demon_name'],
                    'demon_par_1' => $item['demon_par_1'],
                    'demon_par_2' => $item['demon_par_2'],
                    'demon_par_3' => $item['demon_par_3'],

                    'knot_1' => $item['knot_1'],

                    'order' => $item['order'],
                    'status' => $item['status'],
                    'views' => $item['views'],

                    'featured' => $item['featured'],
                    'published' => $item['published'],
                    'mafia' => $item['mafia'],

                    'user_id' => $item['user_id'],
                    'category_id' => $item['category_id'],

                    'title' => $item['title'],
                    'description' => $item['description'],
                    'keywords' => $item['keywords'],
                    'canonical' => $item['canonical'],

					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
