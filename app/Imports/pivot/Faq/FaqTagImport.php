<?php

namespace App\Imports\pivot\Faq;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\FaqTag;

class FaqTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            FaqTag::create([
                'faq_id' => $item['faq_id'],
                'tag_id' => $item['tag_id'],
            ]);
        }
    }
}
