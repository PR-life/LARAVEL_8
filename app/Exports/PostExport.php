<?php

namespace App\Exports;

use App\Models\Post;
use Illuminate\Support\Facades\Schema;

use Maatwebsite\Excel\Concerns\FromCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class PostExport implements FromCollection, WithHeadings, WithStrictNullComparison
{

	public function headings(): array {

		return Schema::getColumnListing('posts');
		// return [
		// 	"id",
		// 	"sku",
		// ];
	}

    public function collection()
    {
        return Post::all();
    }
}
