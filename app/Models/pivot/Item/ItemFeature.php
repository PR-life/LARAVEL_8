<?php

namespace App\Models\pivot\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFeature extends Model
{
    use HasFactory;

    protected $table = 'item_features';
    protected $guarded = false;
}
