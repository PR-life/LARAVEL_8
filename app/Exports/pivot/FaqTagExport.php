<?php

namespace App\Exports\pivot;

use App\Models\pivot\FaqTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class FaqTagExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"faq_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return FaqTag::all();
    }
}
