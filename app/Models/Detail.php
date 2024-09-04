<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use App\Models\Traits\HasCarbonDate;
//

class Detail extends Model
{

    use HasFactory, SoftDeletes, Filterable, HasCarbonDate;
	
    protected $table = 'details';
    protected $guarded = false;
 


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
            'tag_id',
			'id',
        );
    }
}