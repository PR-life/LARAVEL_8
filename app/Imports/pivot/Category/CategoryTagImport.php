<?php

namespace App\Imports\pivot\Category;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Category\CategoryTag;

class CategoryTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            CategoryTag::create([
                'category_id' => $item['category_id'],
                'tag_id' => $item['tag_id'],
            ]);
        }
    }
}
