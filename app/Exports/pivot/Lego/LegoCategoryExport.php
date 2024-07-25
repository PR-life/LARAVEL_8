<?php

namespace App\Exports\pivot\Lego;

use App\Models\pivot\Lego\LegoCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class LegoCategoryExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"lego_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return LegoCategory::all();
    }
}