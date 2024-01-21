<?php

namespace App\Exports;

use App\Models\Landing;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class LandingExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",

			"h1",
			"intro",
			"text",

			"bread_name",

			"prev_h1",
			"prev_h2",
			"prev_p",

			"en_name",
			"en_h1",
			"en_intro",
			"en_text",
			"en_prev_h1",
			"en_prev_h2",
			"en_prev_p",

			"prev_image",
			"prev_url",

			"knot_1",

			"order",
			"status",
			"views",
			"featured",
			"published",
			
			"category_id",

			"title",
			"description",
			"keywords",

			"en_title",
			"en_description",
			"en_keywords",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return Landing::all();
    }
}
