<?php

namespace App\Imports\pivot\Lego;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Lego\LegoTag;

class LegoTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            LegoTag::create([
                'lego_id' => $item['lego_id'],
                'tag_id' => $item['tag_id'],
            ]);
        }
    }
}
