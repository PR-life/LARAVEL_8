<?php

namespace App\Exports;

use App\Models\Landing;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class LandingExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {
		return Schema::getColumnListing('landings');
	}

    public function collection()
    {
        return Landing::all();
    }
}
