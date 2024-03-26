<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\Sms;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class SmsUpdate implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			$status = $item['status'] == null ? '0' : $item['status'];
			$views = $item['views'] == null ? '1' : $item['views'];
			$featured = $item['featured'] == null ? '0' : $item['featured'];
			$published = $item['published'] == null ? '1' : $item['published'];
			$mafia = $item['mafia'] == null ? '0' : $item['mafia'];
 
			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];
	
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                Sms::withTrashed()->updateOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],

                    'email' => $item['email'],
                    'phone' => $item['phone'],
                    'whatsapp' => $item['whatsapp'],
                    'telegram' => $item['telegram'],
                    'whatsapp' => $item['whatsapp'],
                    'viber' => $item['viber'],

                    'country' => $item['country'],
                    'city' => $item['city'],
                    'www' => $item['www'],
                    'title' => $item['title'],
                    'page' => $item['page'],

                    'sms' => $item['sms'],
                    'answer' => $item['answer'],

                    'order' => $item['order'],
                    'status' => $status,
                    'views' => $views,

                    'featured' => $featured,
                    'published' => $published,
                    'mafia' => $mafia,

					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
