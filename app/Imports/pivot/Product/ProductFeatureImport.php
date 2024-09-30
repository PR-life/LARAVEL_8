<?php

namespace App\Imports\pivot\Product;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Product\ProductFeature;

class ProductFeatureImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ProductFeature::create([
                'product_id' => $item['product_id'],
                'feature_id' => $item['feature_id'],
            ]);
        }
    }
}
