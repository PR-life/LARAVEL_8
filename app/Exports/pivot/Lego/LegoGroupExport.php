<?php

namespace App\Exports\pivot\Lego;

use App\Models\pivot\Lego\LegoGroup;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class LegoGroupExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"lego_id",
			"group_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return LegoGroup::all();
    }
}