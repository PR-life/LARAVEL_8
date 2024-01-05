<?php

namespace App\Exports;

use App\Models\Tag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class TagExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",
			"slug",

            "category_id",

			"name_2",
			"name_3",
			"name_4",
			"name_5",
			"name_6",
			"name_7",
			"name_8",

			"en_name",
			"en_name_2",
			"en_name_3",
			"en_name_4",
			"en_name_5",
			"en_name_6",
			"en_name_7",
			"en_name_8",

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
        return Tag::all();
    }
}
