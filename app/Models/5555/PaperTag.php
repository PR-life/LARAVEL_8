<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperTag extends Model
{
    use HasFactory;

    protected $table = 'paper_tags';
    protected $guarded = false;

}
