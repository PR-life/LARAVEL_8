<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingItem extends Model
{
    use HasFactory;

    protected $table = 'landing_items';
    protected $guarded = false;

}
