<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'groups';
    protected $guarded = false;



    
    public function faqs() {
        return $this->hasMany(
            Faq::class,
            'group_id',
            'id', //
        )->orderBy('order', 'asc');
    }

    public function items() {
        return $this->hasMany(
            Item::class,
            'group_id',
            'id', //
        )->orderBy('order', 'asc');
    }

    // public function posts() {
    //     return $this->hasMany(
    //         Post::class,
    //         'group_id', // foreygnKey в таблице этого (Post) класса 
    //         'id', // local, id этой модели в указанной таблице
    //     )->orderBy('created_at', 'desc');
	// 		// универсальная запись

	// 	// return $this->hasMany(Post::class);
	// 		// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
	// 		// https://www.youtube.com/watch?v=c0yuY_Ugacg
    // }

    // public function papers() {
    //     return $this->hasMany(
    //         Paper::class,
    //         'group_id',
    //         'id', //
    //     )->orderBy('created_at', 'desc');
    // }

    
    public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}

}
