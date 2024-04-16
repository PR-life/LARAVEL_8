<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperFaq extends Model
{
    use HasFactory;

    protected $table = 'paper_faqs';
    protected $guarded = false;
}
