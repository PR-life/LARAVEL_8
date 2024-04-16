<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperItem extends Model
{
    use HasFactory;

    protected $table = 'paper_items';
    protected $guarded = false;

}
