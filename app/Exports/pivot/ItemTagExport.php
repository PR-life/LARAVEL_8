<?php

namespace App\Exports\pivot;

use App\Models\pivot\ItemTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ItemTagExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"item_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ItemTag::all();
    }
}
