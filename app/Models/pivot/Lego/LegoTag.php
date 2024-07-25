<?php

namespace App\Models\pivot\Lego;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoTag extends Model
{
    use HasFactory;

    protected $table = 'lego_tags';
    protected $guarded = false;
}
