<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class CommentPaper extends Model
{
    use HasFactory;
	use SoftDeletes;

    protected $table = 'comments_paper';
    protected $guarded = false;

	public function user(){
		return $this->belongsTo(User::class,'user_id','id');
	}

    public function item() {
		return $this->belongsTo(Paper::class,'item_id','id');
    }

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
}
