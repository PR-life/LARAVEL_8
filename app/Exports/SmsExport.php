<?php

namespace App\Exports;

use App\Models\Sms;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class SmsExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"sku",

			"name",
			"contact",

			"email",
			"phone",
			"whatsapp",
			"telegram",
			"viber",

			"country",
			"city",
			"area",

			"sms",
			"answer",
			"answer_user_name",
            
			"param_1",
			"param_2",
			"param_3",
            
			"question_1",
			"question_2",
			"question_3",
			"question_4",

			"type",
			"label",
			"id_item",
			"from_page",

			"go_mod_talk",

			"category_id",
			"tag_id",
			"group_id",

			"views",
			"order",
			"status",

			"featured",
			"published",
			"mafia",

			"lang",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return Sms::all();
    }
}
