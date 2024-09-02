<?php

namespace App\Exports\pivot\Category;

use App\Models\pivot\Category\CategoryFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class CategoryFaqExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"category_id",
			"faq_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return CategoryFaq::all();
    }
}
