<?php

namespace App\Exports;

use App\Models\Sms;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class SmsExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {
		return Schema::getColumnListing('sms');
	}

    public function collection()
    {
        return Sms::all();
    }
}
