<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\PaperItem;

class PaperItemImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {
        
        foreach ($collection as $item) {
            PaperItem::create([
                'paper_id' => $item['paper_id'],
                'item_id' => $item['item_id'],
            ]);

        }
    }
}
