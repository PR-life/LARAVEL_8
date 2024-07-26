<?php

namespace App\Imports\pivot\Item;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Item\ItemFaq;

class ItemFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ItemFaq::create([
                'item_id' => $item['item_id'],
                'faq_id' => $item['faq_id'],
            ]);
        }
    }
}
