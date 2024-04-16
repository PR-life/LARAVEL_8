<?php

namespace App\Exports\pivot;

use App\Models\pivot\FaqGroup;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class FaqGroupExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"faq_id",
			"group_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return FaqGroup::all();
    }
}
