<?php

namespace App\Exports\pivot;

use App\Models\SmsTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class SmsTagExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"post_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return SmsTag::all();
    }
}
