<?php

namespace App\Exports\pivot\Item;

use App\Models\pivot\Item\ItemTag;
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
