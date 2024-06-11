<?php

namespace App\Exports\pivot;

use App\Models\pivot\ServiceTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ServiceTagExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"service_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ServiceTag::all();
    }
}
