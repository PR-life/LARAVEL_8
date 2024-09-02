<?php

namespace App\Imports\pivot\Category;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Category\CategoryFaq;

class CategoryFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            CategoryFaq::create([
                'category_id' => $item['category_id'],
                'faq_id' => $item['faq_id'],
            ]);
        }
    }
}
