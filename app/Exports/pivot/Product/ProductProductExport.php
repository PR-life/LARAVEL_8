<?php

namespace App\Exports\pivot\Product;

use App\Models\pivot\Product\ProductProduct;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductProductExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"product_id",
			"products_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ProductProduct::all();
    }
}
