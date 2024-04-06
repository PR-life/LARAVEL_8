<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//


class Post extends Model
{
    use HasFactory; // возможность использовать Фабрику для этой модели
	use SoftDeletes;
	use Filterable;

    protected $table = 'posts';
    protected $guarded = false;

    // protected $withCount = ['likedUsers','comments']; // названия по Функциям ниже
    // protected $with = ['category','author'];
    
    protected $lang_fields = [
        'name',
        'name_seo',
        'h1',
        'text',
        'prev_h1',
        'prev_h2',
        'prev_p',
        'title',
        'description',
        'keywords',
    ];


    public function tags() {

        return $this->belongsToMany(
            Tag::class,
            'post_tags', // через какую тбл свзяь
            'post_id', // foreignKey этой модели в указанной таблице
            'tag_id' // relatedPivotKey, с кем foreignKey имеет взаимоотношение
        );

		// return $this->belongsToMany(Tag::class,'post_tags');
			// !!! не сошлось с видео
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }

    public function comments() {
        return $this->hasMany(
            CommentPost::class,
            'item_id', // foreignKey
			'id', // ownerKey
        )->where('published','=', 1);
    }









//    public function author(): BelongsTo
//    {
//        return $this->belongsTo(User::class, 'user_id');
//    }


	// для вывода популярных постов
    // public function likedUsers() {
    //     return $this->belongsToMany(
    //         User::class,
    //         'post_user_likes',
    //         'post_id',
    //         'user_id'
    //     );
    // }


    public function category() {

		// return 'category';


        return $this->belongsTo(
            Category::class,
            'category_id', // foreygnKey свой личный (Post) 
			'id', // ownerKey
        );
			// универсальная запись

		// return $this->belongsTo(Category::class); 
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }




	//
    // public function restore($id) {
	// 	$post = Post::withTrashed()->find($id);
	// 	$post->restore();
    // }	

    // public function author() {
    //     return $this->belongsTo(
    //         User::class,
    //         'user_id', // foreignKey
	// 		'id', // ownerKey
    //     );
    // }

    public function tag() {
        return $this->belongsTo(
            Tag::class,
            'tag_id',
			'id',
        );
    }


    public function group() {
        return $this->belongsTo(
            Group::class,
            'group_id',
			'id',
        );
    }

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
    
    public function getAttribute($key) {
        $default = parent::getAttribute($key);
        if ((app()->getLocale() !== 'ru') && isset($this->lang_fields) && in_array($key, $this->lang_fields)) {
            return $this->{$key.'_'.app()->getLocale()} ?? $this->{'en_'.$key};
            // return $this->{$key.'_'.app()->getLocale()} ?? $this->{$key.'_en'};
        }
        return $default;
    }
}
