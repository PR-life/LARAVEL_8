<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsTag extends Model
{
    use HasFactory;

    protected $table = 'sms_tags';
    protected $guarded = false;
}
