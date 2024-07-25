<?php

namespace App\Exports;

use App\Models\Lego;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class LegoExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {
		return Schema::getColumnListing('lego');
	}

    public function collection()
    {
        return Lego::all();
    }
}
