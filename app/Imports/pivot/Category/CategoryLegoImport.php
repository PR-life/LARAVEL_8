<?php

namespace App\Imports\pivot\Category;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Category\CategoryLego;

class CategoryLegoImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            CategoryLego::create([
                'category_id' => $item['category_id'],
                'lego_id' => $item['lego_id'],
            ]);
        }
    }
}
