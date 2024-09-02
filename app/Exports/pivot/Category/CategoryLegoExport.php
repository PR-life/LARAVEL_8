<?php

namespace App\Exports\pivot\Category;

use App\Models\pivot\Category\CategoryLego;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class CategoryLegoExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"category_id",
			"lego_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return CategoryLego::all();
    }
}
