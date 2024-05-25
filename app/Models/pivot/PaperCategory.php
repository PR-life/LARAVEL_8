<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperCategory extends Model
{
    use HasFactory;

    protected $table = 'paper_categories';
    protected $guarded = false;

}
