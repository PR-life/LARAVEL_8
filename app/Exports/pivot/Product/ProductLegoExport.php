<?php

namespace App\Exports\pivot\Product;

use App\Models\pivot\Product\ProductLego;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductLegoExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"product_id",
			"lego_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ProductLego::all();
    }
}
