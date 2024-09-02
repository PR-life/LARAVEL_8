<?php

namespace App\Imports\pivot\Service;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\ServiceCategory;

class ServiceCategoryImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ServiceCategory::create([
                'service_id' => $item['service_id'],
                'category_id' => $item['category_id'],
            ]);
        }
    }
}
