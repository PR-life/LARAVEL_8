<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Crm extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'crm';
    protected $guarded = false;


}