<?php

namespace App\Exports\pivot;

use App\Models\pivot\ItemFaq;
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
