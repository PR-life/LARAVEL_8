<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//

class Feature extends Model
{
    use HasFactory;
	use SoftDeletes;
    use Filterable;
	
    protected $table = 'features';
    protected $guarded = false;
 

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
}