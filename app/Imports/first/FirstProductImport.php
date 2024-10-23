<?php

namespace App\Imports\first;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
// use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Traits\HasSlug;


class FirstProductImport implements ToCollection, WithHeadingRow 
{
    use HasSlug;
	
    public function collection(Collection $collection)
    {
        $params = [];

        foreach($collection as $item) {
            
            $params = [
                'id' => $item['id'],
                'name' => $item['name'],
                'slug' => $item['slug'] ?? null
            ];

            // Генерация slug, если он отсутствует
            if (empty($params['slug'])) {
                $params['slug'] = $this->generateUniqueSlug($params['name'], Product::class);
            }


            Product::firstOrCreate([
                'id' => $params['id'],
                ],$params);

        }
    }

}
