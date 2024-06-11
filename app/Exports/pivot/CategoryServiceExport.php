<?php

namespace App\Exports\pivot;

use App\Models\pivot\CategoryService;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class CategoryServiceExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"category_id",
			"service_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return CategoryService::all();
    }
}
