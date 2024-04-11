<?php

namespace App\Exports\pivot;

use App\Models\pivot\ItemCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemCategoryExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"item_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ItemCategory::all();
    }
}
