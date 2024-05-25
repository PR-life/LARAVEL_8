<?php

namespace App\Exports\pivot;

use App\Models\pivot\PaperCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class PaperCategoryExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"paper_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return PaperCategory::all();
    }
}