<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\LandingItem;

class LandingItemImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {
        
        foreach ($collection as $item) {
            LandingItem::create([
                'landing_id' => $item['landing_id'],
                'item_id' => $item['item_id'],
            ]);

        }
    }
}
