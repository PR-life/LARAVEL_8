<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Brief extends Model
{
    use HasFactory;
	use SoftDeletes;

    protected $table = 'brief';
    protected $guarded = false;
	


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

