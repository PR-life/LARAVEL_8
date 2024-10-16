<?php

namespace App\Imports\pivot\Item;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Item\ItemItem;

class ItemItemImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ItemItem::create([
                'item_id' => $item['item_id'],
                'items_id' => $item['items_id'],
            ]);
        }
    }
}
