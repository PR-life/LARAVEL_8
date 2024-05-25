<?php

namespace App\Imports\pivot;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\PaperCategory;

class PaperCategoryImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            PaperCategory::create([
                'paper_id' => $item['paper_id'],
                'category_id' => $item['category_id'],
            ]);
        }
    }
}
