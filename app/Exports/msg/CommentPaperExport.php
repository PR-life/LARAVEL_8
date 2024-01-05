<?php

namespace App\Exports\msg;

use App\Models\CommentPaper;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class CommentPaperExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"name",
			"user_contact",

			"h1",
			"text",

			"answer",
			"answer_user_name",

			"item_id",
			"user_id",

			"order",
			"published",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return CommentPaper::all();
    }
}
