<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqGroup extends Model
{
    use HasFactory;

    protected $table = 'faq_groups';
    protected $guarded = false;
}
