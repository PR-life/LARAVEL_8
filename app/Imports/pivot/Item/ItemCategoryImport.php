<?php

namespace App\Imports\pivot\Item;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Item\ItemCategory;

class ItemCategoryImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ItemCategory::create([
                'item_id' => $item['item_id'],
                'category_id' => $item['category_id'],
            ]);
        }
    }
}
