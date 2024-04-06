<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperItem extends Model
{
    use HasFactory;


    protected $table = 'paper_items';
    protected $guarded = false;


	// public function papers(){
    //     return 1;
	// 	return $this->belongsToMany(Paper::class, 'paper_tags', 'tag_id', 'paper_id');
	// }

}
