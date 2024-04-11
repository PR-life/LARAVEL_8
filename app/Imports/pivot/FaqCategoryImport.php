<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\FaqCategory;

class FaqCategoryImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            FaqCategory::create([
                'faq_id' => $item['faq_id'],
                'category_id' => $item['category_id'],
            ]);
        }
    }
}
