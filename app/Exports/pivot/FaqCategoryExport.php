<?php

namespace App\Exports\pivot;

use App\Models\pivot\FaqCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class FaqCategoryExport implements FromCollection, WithHeadings
{
	public function headings(): array {
		return [
			"faq_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return FaqCategory::all();
    }
}
