<?php

namespace App\Models\pivot\Lego;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegoGroup extends Model
{
    use HasFactory;

    protected $table = 'lego_groups';
    protected $guarded = false;
}
