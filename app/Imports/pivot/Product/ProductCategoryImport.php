<?php

namespace App\Imports\pivot\Product;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Product\ProductCategory;

class ProductCategoryImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ProductCategory::create([
                'product_id' => $item['product_id'],
                'category_id' => $item['category_id'],
            ]);
        }
    }
}
