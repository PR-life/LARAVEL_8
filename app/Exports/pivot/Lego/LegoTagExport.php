<?php

namespace App\Exports\pivot\Lego;

use App\Models\pivot\Lego\LegoTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class LegoTagExport implements FromCollection, WithHeadings
{
	
	public function headings(): array {
		return [
			"lego_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}

    public function collection()
    {
        return LegoTag::all();
    }
}