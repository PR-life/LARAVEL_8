<?php

namespace App\Imports\pivot\Lego;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Lego\LegoCategory;

class LegoCategoryImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            LegoCategory::create([
                'lego_id' => $item['lego_id'],
                'category_id' => $item['category_id'],
            ]);
        }
    }
}
