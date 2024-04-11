<?php

namespace App\Exports\pivot;

use App\Models\pivot\CategoryTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class CategoryTagExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"category_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}






    public function collection()
    {
        return CategoryTag::all();
    }
}
