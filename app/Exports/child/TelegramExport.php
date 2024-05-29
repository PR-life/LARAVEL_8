<?php

namespace App\Exports\child;

use App\Models\_child\Telegram;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class TelegramExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {
		return Schema::getColumnListing('telegrams');
	}

    public function collection()
    {
        return Telegram::all();
    }
}
