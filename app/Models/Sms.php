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
	
    

    public function categories() {
        return $this->belongsToMany(
            Category::class,
            'sms_categories', // через какую тбл свзяь
            'sms_id', // id этой модели в указанной таблице
            'category_id' // id модели Category в указанной таблице
        );
    }


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

    public function tag() {
        return $this->belongsTo(
            Tag::class,
            'tag_id', // foreignKey
			'id', // ownerKey
        );
    }


	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}

	
}

