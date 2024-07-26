<?php

namespace App\Exports\pivot\Item;

use App\Models\pivot\Item\ItemFaq;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class ItemFaqExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"item_id",
			"faq_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return ItemFaq::all();
    }
}
