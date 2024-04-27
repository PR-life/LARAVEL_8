<?php

namespace App\Models\pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingTag extends Model
{
    use HasFactory;

    protected $table = 'landing_tags';
    protected $guarded = false;

}
