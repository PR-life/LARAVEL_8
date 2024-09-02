<?php

namespace App\Imports\pivot\Faq;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\FaqGroup;

class FaqGroupImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            FaqGroup::create([
                'faq_id' => $item['faq_id'],
                'group_id' => $item['group_id'],
            ]);
        }
    }
}
