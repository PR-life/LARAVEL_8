<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Faq;

class FaqImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        $params = [];
        $arr = Schema::getColumnListing('faqs');

        foreach($arr as $_count => $_value) {
            $params[$_value] = null;
        };

        foreach ($collection as $item) {
            foreach($params as $_name => $_value) {
                $params[$_name] = $item[$_name] ?? null;
            };

            Faq::updateOrCreate([
                'id' => $params['id'],
                ],$params);
        }

    }
}
