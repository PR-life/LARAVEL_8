<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\ServiceItem;

class ServiceItemImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {
        
        foreach ($collection as $item) {
            ServiceItem::create([
                'service_id' => $item['service_id'],
                'item_id' => $item['item_id'],
            ]);

        }
    }
}
