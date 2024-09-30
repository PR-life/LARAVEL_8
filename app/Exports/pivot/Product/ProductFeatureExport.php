<?php

namespace App\Exports\pivot\Product;

use App\Models\pivot\Product\ProductFeature;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductFeatureExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"product_id",
			"feature_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ProductFeature::all();
    }
}
