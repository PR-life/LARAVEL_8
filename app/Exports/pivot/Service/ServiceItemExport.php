<?php

namespace App\Exports\pivot\Service;

use App\Models\pivot\ServiceItem;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ServiceItemExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"service_id",
			"item_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ServiceItem::all();
    }
}
