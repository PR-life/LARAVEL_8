<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Faq;


class FirstFaqImport implements ToCollection, WithHeadingRow 
{
	
    public function collection(Collection $collection)
    {
        $params = [];

        foreach($collection as $item) {
            
            $params['id'] = $item['id'];
            $params['name'] = $item['name'];

            Faq::firstOrCreate([
                'id' => $params['id'],
                ],$params);

        }
    }

}
