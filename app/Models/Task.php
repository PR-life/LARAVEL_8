<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tasks';
    protected $guarded = false;




    public function tasks() {

        return $this->belongsToMany(
            Task::class,
            'task_tasks', // через какую тбл свзяь
            'task_id', // foreignKey этой модели в указанной таблице
            'tasks_id' // relatedPivotKey, с кем foreignKey имеет взаимоотношение
        );

		// return $this->belongsToMany(Tag::class,'post_tags');
			// !!! не сошлось с видео
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }






    public function user() {
        return $this->belongsTo(
            User::class,
            'user_id',
			'id',
        );
    }

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
    // public function posts() {
    //     return $this->hasMany(
    //         Post::class,
    //         'category_id', // foreygnKey в таблице этого (Post) класса 
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
    //         'category_id',
    //         'id', //
    //     )->orderBy('created_at', 'desc');
    // }


    // public function parentCategory() {
    //     return $this->belongsTo(
    //         Category::class,
    //         'category_id',
	// 		'id',
    //     );
    // }

    // public function childrenCategories()
    // {
    //     return $this->hasMany(Category::class)->with('categories');
    // }

    // public function categories()
    // {
    //     return $this->hasMany(Category::class);
    // }

 
}
