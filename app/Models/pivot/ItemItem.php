<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemItem extends Model
{
    use HasFactory;

    protected $table = 'item_items';
    protected $guarded = false;
}
