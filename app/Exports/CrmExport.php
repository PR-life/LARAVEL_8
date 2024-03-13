<?php

namespace App\Exports;

use App\Models\Crm;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class CrmExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",

			"order",
			"status",
			"published",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}

    public function collection()
    {
        return Crm::all();
    }
}
