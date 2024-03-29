<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $table = 'categories';
    protected $guarded = false;

    protected $lang_fields = [
        'name',
        'name_tag',
        'name_seo',
        'h1',
        'title',
        'description',
        'keywords',
    ];




    public function itemsPivot() {

        return $this->belongsToMany(
            Item::class,
            'item_categories', // через какую тбл свзяь
            'category_id', // foreignKey этой модели в указанной таблице
            'item_id' // relatedPivotKey, с кем foreignKey имеет взаимоотношение
        );

		// return $this->belongsToMany(Tag::class,'post_tags');
			// !!! не сошлось с видео
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }



    public function items() {
        // return $this->hasMany(
        //     Item::class,
        //     'category_id',
        //     'id',
        // )->orderBy('created_at', 'desc');
        return $this->hasMany(Item::class)->orderBy('order', 'asc');
    }



    public function posts() {
        return $this->hasMany(
            Post::class,
            'category_id', // foreygnKey в таблице этого (Post) класса 
            'id', // local, id этой модели в указанной таблице
        )->orderBy('created_at', 'desc');
			// универсальная запись

		// return $this->hasMany(Post::class);
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }

    public function papers() {
        return $this->hasMany(
            Paper::class,
            'category_id',
            'id', //
        )->where('published','1')->orderBy('created_at', 'desc');
    }


    public function tags() {

        return $this->belongsToMany(
            Tag::class,
            'category_tags', // через какую тбл свзяь
            'category_id', // foreignKey этой модели в указанной таблице
            'tag_id' // relatedPivotKey, с кем foreignKey имеет взаимоотношение
        );

		// return $this->belongsToMany(Tag::class,'post_tags');
			// !!! не сошлось с видео
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }

    public function faqs() {
        return $this->hasMany(
            Faq::class,
            'category_id',
            'id', //
        )->where('published', 1)->whereNull('faq_id')->orderBy('order', 'asc');
    }



    public function category() {
        return $this->belongsTo(
            Category::class,
            'category_id',
			'id',
        );
    }



    public function group() {
        return $this->belongsTo(
            Group::class,
            'group_id',
            'id'
        );
    }


    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
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
