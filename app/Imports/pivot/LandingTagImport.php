<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\LandingTag;

class LandingTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {
        
        foreach ($collection as $item) {
            LandingTag::create([
                'landing_id' => $item['landing_id'],
                'tag_id' => $item['tag_id'],
            ]);

        }
    }
}
