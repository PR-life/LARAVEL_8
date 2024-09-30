<?php

namespace App\Exports\pivot\Product;

use App\Models\pivot\Product\ProductFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductFaqExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"product_id",
			"faq_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ProductFaq::all();
    }
}
