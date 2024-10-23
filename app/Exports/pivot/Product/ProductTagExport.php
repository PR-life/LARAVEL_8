<?php

namespace App\Exports\pivot\Product;

use App\Models\pivot\Product\ProductTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductTagExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"product_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ProductTag::all();
    }
}
