<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class CategoryExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",
			"slug",

			"name_tag",
			"name_seo",
			"h1",

			"en_name",
			"en_name_tag",
			"en_name_seo",
			"en_h1",
			
			"menu",

			"bread_name",

			"prev_h1",
			"prev_h2",
			"prev_p",
			"prev_url",

			"category_id",
			"group_id",

			"string_1",
			"knot_1",

			"order",
			"status",
			"published",

			"title",
			"description",
			"keywords",
			"canonical",

			"en_title",
			"en_description",
			"en_keywords",
			"en_canonical",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return Category::all();
    }
}
