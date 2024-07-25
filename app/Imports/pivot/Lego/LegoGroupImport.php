<?php

namespace App\Imports\pivot\Lego;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Lego\LegoGroup;

class LegoGroupImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            LegoGroup::create([
                'lego_id' => $item['lego_id'],
                'group_id' => $item['group_id'],
            ]);
        }
    }
}
