<?php

namespace App\Models\log;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogFaces extends Model
{
    use HasFactory;

    protected $table = 'log_faces';
    protected $guarded = false;
}
