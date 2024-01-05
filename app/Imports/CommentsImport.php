<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\CommentPost;

// class PostImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings 
class CommentsImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {


			$created_at = !isset($item['created_at']) ? null : $item['created_at'];
			$updated_at = !isset($item['updated_at']) ? null : $item['updated_at'];
			$deleted_at = !isset($item['deleted_at']) ? null : $item['deleted_at'];
	
            if((isset($item['id']) && $item['id'] != null) || isset($item['sku'])) {
                CommentPost::firstOrCreate([
                    'id' => $item['id'],
                ],[
                    'name' => $item['name'],
                    'user_contact' => $item['user_contact'],

                    'h1' => $item['h1'],
                    'text' => $item['text'],
                    'answer' => $item['answer'],
                    'answer_user_name' => $item['answer_user_name'],

                    'item_id' => $item['item_id'],
                    'user_id' => $item['user_id'],

                    'order' => $item['order'],
                    'published' => $item['published'],

					'created_at' => $created_at,
                    'updated_at' => $updated_at,
                    'deleted_at' => $deleted_at,
                ]);
            }

        }
    }
}
