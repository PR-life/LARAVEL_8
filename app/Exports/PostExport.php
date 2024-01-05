<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class PostExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",
			"slug",

			"h1",
			"intro",
			"text",

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

			"knot_1",

			"order",
			"status",
			"views",
			"featured",
			"published",
			"mafia",
			
			"category_id",
			"user_id",

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
        return Post::all();
    }
}
