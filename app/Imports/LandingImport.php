<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Landing;

class LandingImport implements ToCollection, WithHeadingRow 
{

    public function collection(Collection $collection)
    {

        $params = [];
        $arr = Schema::getColumnListing('landings');

        foreach($arr as $_count => $_value) {
            $params[$_value] = null;
        };

        foreach ($collection as $item) {
            foreach($params as $_name => $_value) {
                $params[$_name] = $item[$_name] ?? null;
            };

            Landing::firstOrCreate([
                'id' => $params['id'],
                ],$params);
        }
    }
}
