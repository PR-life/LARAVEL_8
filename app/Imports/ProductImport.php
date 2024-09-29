<?php

namespace App\Imports;

use Illuminate\Support\Collection;
//
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
//
use App\Traits\HasSlug;

class ProductImport extends BaseImport
{

    use HasSlug;

    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {

            $params = [];
    
            // Инициализация параметров
            foreach (Schema::getColumnListing('products') as $column) {
                $params[$column] = $item[$column] ?? null;
            }
    
            // Применяем значения по умолчанию
            $this->applyDefaults($params);
   
            // slug
            if (!filled($params['slug'])) {
                $params['slug'] = $this->generateUniqueSlug($params['name'], \App\Models\Product::class);
            }

            // Сохраняем данные с помощью метода из базового класса
            $this->saveData(Product::class, $params);

        }
    }
}
