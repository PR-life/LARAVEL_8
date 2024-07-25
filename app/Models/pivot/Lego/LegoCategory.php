<?php

namespace App\Models\pivot\Lego;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoCategory extends Model
{
    use HasFactory;

    protected $table = 'lego_categories';
    protected $guarded = false;
}
