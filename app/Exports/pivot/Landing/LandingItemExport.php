<?php

namespace App\Exports\pivot\Landing;

use App\Models\pivot\LandingItem;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class LandingItemExport implements FromCollection, WithHeadings
{

	public function headings(): array {
		return [
			"landing_id",
			"item_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return LandingItem::all();
    }
}
