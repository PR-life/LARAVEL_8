<?php

namespace App\Imports\En;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\En\SmsEn;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class SmsEnImport implements ToCollection, WithHeadingRow 
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

			// $featured = $item['featured'] == null ? '0' : $item['featured'];
			// $published = $item['published'] == null ? '1' : $item['published'];
			// $mafia = $item['mafia'] == null ? '0' : $item['mafia'];
 
			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];

	
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                SmsEn::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'sku' => $item['sku'],
                    'name' => $item['name'],
                    'contact' => $item['contact'],

                    'email' => $item['email'],
                    'phone' => $item['phone'],
                    'whatsapp' => $item['whatsapp'],
                    'telegram' => $item['telegram'],
                    'viber' => $item['viber'],
 
                    'country' => $item['country'],
                    'city' => $item['city'],
                    'area' => $item['area'],

                    'sms' => $item['sms'],
                    'answer' => $item['answer'],
                    'answer_user_name' => $item['answer_user_name'],


                    'go_mod_talk' => $item['go_mod_talk'],

                    'param_1' => $item['param_1'],
                    'param_2' => $item['param_2'],
                    'param_3' => $item['param_3'],
                    
                    'question_1' => $item['question_1'],
                    'question_2' => $item['question_2'],
                    'question_3' => $item['question_3'],
                    'question_4' => $item['question_4'],


                    'type' => $item['type'],
                    'label' => $item['label'],
                    'id_item' => $item['id_item'],
                    'from_page' => $item['from_page'],

                    'views' => $item['views'],
                    'order' => $item['order'],
                    'status' => $item['status'],

                    'featured' => $item['featured'],
                    'published' => $item['published'],
                    'mafia' => $item['mafia'],
                    'lang' => $item['lang'],

					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
