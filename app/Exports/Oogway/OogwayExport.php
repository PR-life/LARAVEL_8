<?php

namespace App\Exports\Oogway;

use App\Models\Oogway;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class OogwayExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"name",

			"text_prev",
			"text",
			"text_tz",
			"text_result",

			"oogway_id",


			//
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
        return Oogway::all();
    }
}
