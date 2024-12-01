<?php

namespace App\Imports\first;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\_child\Collection as Collection0112;


class FirstCollectionImport implements ToCollection, WithHeadingRow 
{
	
    public function collection(Collection $collection)
    {
        $params = [];

        foreach ($collection as $item) {

            $params['id'] = $item['id'];
            $params['name'] = $item['name'];
            $params['slug'] = $item['slug'];

            Collection0112::firstOrCreate([
                'id' => $params['id'],
                ],$params);
        }
    }
}
