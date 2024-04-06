<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTask extends Model
{
    use HasFactory;

    protected $table = 'task_tasks';
    protected $guarded = false;


	// public function papers(){
    //     return 1;
	// 	return $this->belongsToMany(Paper::class, 'paper_tags', 'tag_id', 'paper_id');
	// }

}
