<?php

namespace App\Exports\pivot\Item;

use App\Models\pivot\Item\ItemItem;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemItemExport implements FromCollection, WithHeadings
{
	public function headings(): array {
		return [
			"item_id",
			"items_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ItemItem::all();
    }
}
