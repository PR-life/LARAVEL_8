<?php

namespace App\Exports\pivot;

use App\Models\pivot\ServiceFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ServiceFaqExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"service_id",
			"faq_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ServiceFaq::all();
    }
}
