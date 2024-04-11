<?php

namespace App\Exports\pivot;

use App\Models\pivot\LandingTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class LandingTagExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"landing_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}






    public function collection()
    {
        return LandingTag::all();
    }
}
