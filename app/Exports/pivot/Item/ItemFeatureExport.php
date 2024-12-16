<?php

namespace App\Exports\pivot\Item;

use App\Models\pivot\Item\ItemFeature;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemFeatureExport implements FromCollection, WithHeadings
{
	public function headings(): array {
		return [
			"item_id",
			"feature_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ItemFeature::all();
    }
}
