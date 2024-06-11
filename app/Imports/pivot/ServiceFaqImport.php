<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\ServiceFaq;

class ServiceFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ServiceFaq::create([
                'service_id' => $item['service_id'],
                'faq_id' => $item['faq_id'],
            ]);
        }
    }
}
