<?php

namespace App\Exports\CRM;

use App\Models\CRM\Crm;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class CrmExport implements FromCollection, WithHeadings, WithStrictNullComparison
{


	public function headings(): array {
		return Schema::getColumnListing('crm');
	}

    public function collection()
    {
        return Crm::all();
    }
}
