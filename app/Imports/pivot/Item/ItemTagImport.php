<?php

namespace App\Imports\pivot\Item;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Item\ItemTag;

class ItemTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ItemTag::create([
                'item_id' => $item['item_id'],
                'tag_id' => $item['tag_id'],
            ]);
        }
    }
}
