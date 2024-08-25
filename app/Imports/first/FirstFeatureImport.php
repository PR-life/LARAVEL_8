<?php

namespace App\Imports\first;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Feature;


class FirstFeatureImport implements ToCollection, WithHeadingRow 
{
	
    public function collection(Collection $collection)
    {
        $params = [];

        foreach ($collection as $item) {
            
            $params['id'] = $item['id'];
            $params['name'] = $item['name'];
            $params['slug'] = $item['slug'];

            Feature::firstOrCreate([
                'id' => $params['id'],
                ],$params);
        }
    }
}
