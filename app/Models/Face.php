<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//
use App\Models\CRM\Crm;


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



    public function crm() {
        return $this->belongsTo(
            Crm::class,
            'crm_id',
			'id',
        );
    }


    //
    public function faces() {
        return $this->belongsToMany(
            Face::class,
            'face_faces',
            'face_id',
            'faces_id'
        );
    }


    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'face_tags',
            'face_id',
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

	public function parentFace(){
		return $this->belongsTo(Face::class);
	}

	public function face(){
		return $this->hasOne(Face::class);
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
