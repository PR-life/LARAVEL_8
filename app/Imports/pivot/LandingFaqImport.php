<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\LandingFaq;

class LandingFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {
        
        foreach ($collection as $item) {
            LandingFaq::create([
                'landing_id' => $item['landing_id'],
                'faq_id' => $item['faq_id'],
            ]);

        }
    }
}
