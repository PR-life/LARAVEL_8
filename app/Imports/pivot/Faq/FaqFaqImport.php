<?php

namespace App\Imports\pivot\Faq;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\FaqFaq;

class FaqFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            FaqFaq::create([
                'faq_id' => $item['faq_id'],
                'faqs_id' => $item['faqs_id'],
            ]);
        }
    }
}
