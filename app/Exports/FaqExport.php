<?php

namespace App\Exports;

use App\Models\Faq;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class FaqExport implements FromCollection, WithHeadings, WithStrictNullComparison
{


	public function headings(): array {
		return Schema::getColumnListing('faqs');
	}

    public function collection()
    {
        return Faq::all();
    }
}
