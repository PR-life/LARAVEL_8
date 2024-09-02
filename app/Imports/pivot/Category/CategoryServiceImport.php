<?php

namespace App\Imports\pivot\Category;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Category\CategoryService;

class CategoryServiceImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            CategoryService::create([
                'category_id' => $item['category_id'],
                'service_id' => $item['service_id'],
            ]);
        }
    }
}
