<?php

namespace App\Exports\pivot;

use App\Models\pivot\ServiceCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ServiceCategoryExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"service_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ServiceCategory::all();
    }
}