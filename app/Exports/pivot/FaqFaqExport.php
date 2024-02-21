<?php

namespace App\Exports\pivot;

use App\Models\FaqFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class FaqFaqExport implements FromCollection, WithHeadings
{
	public function headings(): array {
		return [
			"faq_id",
			"faqs_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return FaqFaq::all();
    }
}
