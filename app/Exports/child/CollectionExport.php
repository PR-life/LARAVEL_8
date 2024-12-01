<?php

namespace App\Exports\child;

use App\Models\_child\Collection;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class CollectionExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {
		return Schema::getColumnListing('collections');
	}

    public function collection()
    {
        return Collection::all();
    }
}
