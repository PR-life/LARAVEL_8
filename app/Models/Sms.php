<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Sms extends Model
{
    use HasFactory;
	use SoftDeletes;

    protected $table = 'sms';
    protected $guarded = false;
	



    public function tags() {

        return $this->belongsToMany(
            Tag::class,
            'sms_tags',
            'sms_id',
            'tag_id'
        );
    }


    public function category() {
        return $this->belongsTo(
            Category::class,
            'category_id',
			'id',
        );
    }




	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}

	
}

