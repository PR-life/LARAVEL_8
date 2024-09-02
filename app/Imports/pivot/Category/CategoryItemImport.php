<?php

namespace App\Imports\pivot\Category;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Category\CategoryItem;

class CategoryItemImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            CategoryItem::create([
                'category_id' => $item['category_id'],
                'item_id' => $item['item_id'],
            ]);
        }
    }
}
