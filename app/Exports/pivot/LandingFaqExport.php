<?php

namespace App\Exports\pivot;

use App\Models\pivot\LandingFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class LandingFaqExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"landing_id",
			"faq_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return LandingFaq::all();
    }
}
