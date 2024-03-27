<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use App\Models\ItemTag;

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
