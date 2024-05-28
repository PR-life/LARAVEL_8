<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Category;


class CategoryImport implements ToCollection, WithHeadingRow 
{
	
    public function collection(Collection $collection)
    {
        $params = [];
        $arr = Schema::getColumnListing('categories');

        foreach($arr as $_count => $_value) {
            $params[$_value] = null;
        };

        foreach ($collection as $item) {
            foreach($params as $_name => $_value) {
                $params[$_name] = $item[$_name] ?? null;
            };

            Category::updateOrCreate([
                'id' => $params['id'],
                ],$params);
        }
    }
}
