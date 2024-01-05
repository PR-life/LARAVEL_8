<?php

namespace App\Models\En;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class SmsEn extends Model
{
    use HasFactory;
	use SoftDeletes;

    protected $table = 'sms_en';
    protected $guarded = false;
	



	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}

	
}

