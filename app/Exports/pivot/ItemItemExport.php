<?php

namespace App\Exports\pivot;

use App\Models\pivot\ItemItem;
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
