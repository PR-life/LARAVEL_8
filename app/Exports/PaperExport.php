<?php

namespace App\Exports;

use App\Models\Paper;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class PaperExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",
			"name",
			"slug",

			"shema",
			"shema_teaser",
			"css",

			"h1",
			"text",
			"article",
			"answer",
			"answer_user_name",

			"prev_h1",
			"prev_h2",
			"prev_p",
			"prev_image",

			"foto_count_teaser",
			"foto_count_full",
			"url_foto",
			"url_video",

			"link_media",
			"link_media_name",
			
			"demon_name",
			"demon_par_1",
			"demon_par_2",
			"demon_par_3",

			"knot_1",

			"order",
			"status",
			"views",
			"featured",
			"published",
			"mafia",
			
			"user_id",
			"category_id",

			"title",
			"description",
			"keywords",
			"canonical",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return Paper::all();
    }
}
