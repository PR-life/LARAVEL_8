<?php

namespace App\Exports\pivot\Paper;

use App\Models\pivot\PaperItem;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class PaperItemExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"paper_id",
			"item_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return PaperItem::all();
    }
}
