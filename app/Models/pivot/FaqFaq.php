<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqFaq extends Model
{
    use HasFactory;

    protected $table = 'faq_faqs';
    protected $guarded = false;
}
