<?php

namespace App\Models\_lib;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//
use App\Models\Face;


class Clothes extends Model
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'clothes';
    protected $guarded = false;


    public function face() {
        return $this->belongsTo(
            Face::class,
            'face_id', // foreignKey
            'id', // ownerKey
        );
    }

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->updated_at);
	}
}
