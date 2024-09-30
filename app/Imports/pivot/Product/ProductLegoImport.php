<?php

namespace App\Imports\pivot\Product;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Product\ProductLego;

class ProductLegoImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ProductLego::create([
                'product_id' => $item['product_id'],
                'lego_id' => $item['lego_id'],
            ]);
        }
    }
}
