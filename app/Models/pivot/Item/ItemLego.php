<?php

namespace App\Models\pivot\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemLego extends Model
{
    use HasFactory;

    protected $table = 'item_lego';
    protected $guarded = false;
}
