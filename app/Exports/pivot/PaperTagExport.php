<?php

namespace App\Exports\pivot;

use App\Models\PaperTag;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;


class PaperTagExport implements FromCollection, WithHeadings
{

	
	public function headings(): array {
		return [
			"paper_id",
			"tag_id",
			"created_at",
			"updated_at",
		];
	}






    public function collection()
    {
        return PaperTag::all();
    }
}
