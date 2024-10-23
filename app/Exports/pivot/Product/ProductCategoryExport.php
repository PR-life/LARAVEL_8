<?php

namespace App\Exports\pivot\Product;

use App\Models\pivot\Product\ProductCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductCategoryExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"product_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ProductCategory::all();
    }
}
