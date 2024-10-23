<?php

namespace App\Updates;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class ProductUpdate implements ToCollection, WithHeadingRow 
{

    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {


            $params = [];
            $arr = Schema::getColumnListing('products');
            // dd($arr);

            foreach($arr as $_count => $_value) {
                $params[$_value] = null;
            };
            // dd($params);

            foreach ($collection as $product) {

                foreach($params as $_name => $_value) {
                    $params[$_name] = $product[$_name] ?? null;
                };

                foreach ($params as $key => $value) {
                    if($params[$key] == null) {
                        unset($params[$key]);
                    }
                }
            
                Product::updateOrCreate([
                    'id' => $item['id'],
                ],$params);
                // Paper::withTrashed()->updateOrCreate([
                //     'id' => $item['id'],
                // ],$params);

            }
        }
    }
}
