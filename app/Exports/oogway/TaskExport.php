<?php

namespace App\Exports\oogway;

use App\Models\Task;
use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class TaskExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	
	public function headings(): array {
		return [
			"id",
			"name",

			"text_prev",
			"text_fix",


			"local_status",
			"contractor_id",
			"observer_id",
			"oogway_id",

			"user_id",

			//
			"order",
			"status",
			"published",

			"created_at",
			"updated_at",
			"deleted_at",
		];
	}






    public function collection()
    {
        return Task::all();
    }
}
