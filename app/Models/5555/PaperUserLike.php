<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperUserLike extends Model
{
    use HasFactory;

    protected $table = 'paper_user_likes';
    protected $guarded = false;
}
