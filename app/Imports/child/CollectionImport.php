<?php

namespace App\Imports\child;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\_child\Collection as Collection0112;


class CollectionImport implements ToCollection, WithHeadingRow 
{
	
    public function collection(Collection $collection)
    {
        $params = [];
        $arr = Schema::getColumnListing('collections');

        foreach($arr as $_count => $_value) {
            $params[$_value] = null;
        };

        foreach ($collection as $item) {
            foreach($params as $_name => $_value) {
                $params[$_name] = $item[$_name] ?? null;
            };

            Collection0112::updateOrCreate([
                'id' => $params['id'],
                ],$params);
        }
    }
}
