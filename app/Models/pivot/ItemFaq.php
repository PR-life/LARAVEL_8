<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFaq extends Model
{
    use HasFactory;

    protected $table = 'item_faqs';
    protected $guarded = false;
}
