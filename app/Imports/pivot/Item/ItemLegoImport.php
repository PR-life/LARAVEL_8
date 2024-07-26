<?php

namespace App\Imports\pivot\Item;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Item\ItemLego;

class ItemLegoImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ItemLego::create([
                'item_id' => $item['item_id'],
                'lego_id' => $item['lego_id'],
            ]);
        }
    }
}
