<?php

namespace App\Imports\pivot\Service;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\ServiceTag;

class ServiceTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ServiceTag::create([
                'service_id' => $item['service_id'],
                'tag_id' => $item['tag_id'],
            ]);
        }
    }
}
