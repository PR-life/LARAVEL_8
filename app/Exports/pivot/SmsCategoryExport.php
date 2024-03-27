<?php

namespace App\Exports\pivot;

use App\Models\SmsCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class SmsCategoryExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"sms_id",
			"category_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return SmsCategory::all();
    }
}
