<?php

namespace App\Imports\pivot\Product;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Product\ProductProduct;

class ProductProductImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ProductProduct::create([
                'product_id' => $item['product_id'],
                'products_id' => $item['products_id'],
            ]);
        }
    }
}
