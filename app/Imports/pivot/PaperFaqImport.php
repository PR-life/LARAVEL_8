<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\PaperFaq;

class PaperFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            PaperFaq::create([
                'paper_id' => $item['paper_id'],
                'faq_id' => $item['faq_id'],
            ]);
        }
    }
}
