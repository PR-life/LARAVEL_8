<?php

namespace App\Exports\_lib;

use App\Models\_lib\Clothe;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class ClotheExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {
		return Schema::getColumnListing('clothes');
	}

    public function collection()
    {
        return Clothe::all();
    }
}
