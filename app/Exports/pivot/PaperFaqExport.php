<?php

namespace App\Exports\pivot;

use App\Models\pivot\PaperFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class PaperFaqExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"paper_id",
			"faq_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return PaperFaq::all();
    }
}
