<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTag extends Model
{
    use HasFactory;

    protected $table = 'faq_tags';
    protected $guarded = false;
}
