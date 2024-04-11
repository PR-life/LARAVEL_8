<?php

namespace App\Exports\pivot;

use App\Models\pivot\SmsTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class SmsTagExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"sms_id",
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
