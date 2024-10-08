<?php

namespace App\Exports\pivot\Category;

use App\Models\pivot\Category\CategoryItem;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class CategoryItemExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"category_id",
			"item_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return CategoryItem::all();
    }
}
