<?php

namespace App\Exports;

use App\Models\Faq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class FaqExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",

			"filter_par_1",

			"h1",
			"text",

			"en_name",
			"en_h1",
			"en_text",

			"knot_1",

			"order",
			"status",
			"featured",
			"published",

			"mafia",

			"faq_id",
			"category_id",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return Faq::all();
    }
}
