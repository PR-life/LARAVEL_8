<?php

namespace App\Imports\pivot\Product;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\Product\ProductFaq;

class ProductFaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            ProductFaq::create([
                'product_id' => $item['product_id'],
                'faq_id' => $item['faq_id'],
            ]);
        }
    }
}
