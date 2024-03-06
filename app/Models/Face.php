<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//


class Face extends Model
{
    use HasFactory; // возможность использовать Фабрику для этой модели
	use SoftDeletes;
	use Filterable;

    protected $table = 'faces';
    protected $guarded = false;

	protected $casts = [
		'birthday' => 'date:Y-m-d',
	];




    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'face_tags',
            'face_id',
            'tag_id'
        );
    }

	public function face(){
		return $this->hasOne(Face::class);
	}

	public function parentFace(){
		return $this->belongsTo(Face::class);
	}



	public function getAgeAttribute(){
		return Carbon::parse($this->birthday)->age;
		// return Carbon::parse($this->birthday)->diff(now())->format('%y years, %m months and %d days');
		// return Carbon::parse($this->birthday)->diffInYears();
	}

	public function getBirthdayAsCarbonAttribute(){
		return Carbon::parse($this->birthday);
	}

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
}
