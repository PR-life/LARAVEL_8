<?php

namespace App\Imports\pivot\Paper;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\pivot\PaperTag;

class PaperTagImport implements ToCollection, WithHeadingRow 
{
    public function collection(Collection $collection)
    {

        foreach ($collection as $item) {
            PaperTag::create([
                'paper_id' => $item['paper_id'],
                'tag_id' => $item['tag_id'],
            ]);
        }
    }
}
