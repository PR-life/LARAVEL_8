<?php

namespace App\Exports\pivot\Item;

use App\Models\pivot\Item\ItemLego;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ItemLegoExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"item_id",
			"lego_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ItemLego::all();
    }
}
