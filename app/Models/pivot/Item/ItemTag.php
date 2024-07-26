<?php

namespace App\Models\pivot\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTag extends Model
{
    use HasFactory;

    protected $table = 'item_tags';
    protected $guarded = false;

}
