<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//
use App\Models\_child\Service;

// class Category extends Model
class Category extends BaseContent
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




    public function serviceDelivery() 
    {
        return $this->belongsTo(
            Service::class,
            'service_delivery_id',
			'id',
        );
    }
    public function paperPayment() 
    {
        return $this->belongsTo(
            Paper::class,
            'paper_payment_id',
			'id',
        );
    }
    public function paperWarranty() 
    {
        return $this->belongsTo(
            Paper::class,
            'paper_payment_id',
			'id',
        );
    }




    //

    public function categoryService() {
        return $this->belongsTo(
            Category::class,
            'category_services_id',
			'id',
        );
    }

    public function thisServicesPivot() {
        return $this->belongsToMany(
            Service::class,
            'category_services',
            'category_id',
            'service_id'
        );
    }

    // public function thisLegoPivot() {
    //     return $this->belongsToMany(
    //         Lego::class,
    //         'category_lego',
    //         'category_id',
    //         'lego_id'
    //     );
    // }

    // public function thisItemsPivot() {
    //     return $this->belongsToMany(
    //         Item::class,
    //         'category_items',
    //         'category_id',
    //         'item_id'
    //     );
    // }

     
    public function servicesPivot() {
        return $this->belongsToMany(
            Service::class,
            'service_categories',
            'category_id',
            'service_id'
        );
    }
    public function papersPivot() {

        return $this->belongsToMany(
            Paper::class,
            'paper_categories',
            'category_id',
            'paper_id'
        );

		// return $this->belongsToMany(Tag::class,'post_tags');
			// !!! не сошлось с видео
			// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
			// https://www.youtube.com/watch?v=c0yuY_Ugacg
    }



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



    public function services() {
        return $this->hasMany(Service::class)->orderBy('order', 'asc');
    }


    public function products() {
        return $this->hasMany(Product::class)->orderBy('order', 'asc');
    }


    public function items() {
        return $this->hasMany(Item::class)->orderBy('order', 'asc');
    }

    // public function faq() {
    //     return $this->hasMany(
    //         Faq::class,
    //         'category_id',
    //         'id',
    //     )->orderBy('order', 'asc');
    // }

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
            )->where('published','1');
            // )->orderBy('created_at', 'desc');
    }

    // public function tagsMain() {

    //     return $this->hasMany(
    //         Tag::class,
    //         'category_id',
    //         'id'
    //     );

	// 	// return $this->belongsToMany(Tag::class,'post_tags');
	// 		// !!! не сошлось с видео
	// 		// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
	// 		// https://www.youtube.com/watch?v=c0yuY_Ugacg
    // }


    // public function lego() {

    //     return $this->belongsToMany(
    //         Lego::class,
    //         'category_lego',
    //         'category_id',
    //         'lego_id'
    //     );

	// 	// return $this->belongsToMany(Tag::class,'post_tags');
	// 		// !!! не сошлось с видео
	// 		// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
	// 		// https://www.youtube.com/watch?v=c0yuY_Ugacg
    // }


    // public function categories() {
    //     return $this->belongsToMany(
    //         Category::class,
    //         'category_categories',
    //         'category_id',
    //         'categories_id'
    //     );
    // }

    // public function tags() {

    //     return $this->belongsToMany(
    //         Tag::class,
    //         'category_tags', // через какую тбл свзяь
    //         'category_id', // foreignKey этой модели в указанной таблице
    //         'tag_id' // relatedPivotKey, с кем foreignKey имеет взаимоотношение
    //     );

	// 	// return $this->belongsToMany(Tag::class,'post_tags');
	// 		// !!! не сошлось с видео
	// 		// запись по конвенции Laravel, тут важно соблюдать имена в атрибутах
	// 		// https://www.youtube.com/watch?v=c0yuY_Ugacg
    // }



    // public function faqs() {
    //     return $this->belongsToMany(
    //         Faq::class,
    //         'category_faqs',
    //         'category_id',
    //         'faq_id'
    //     )->orderBy('order', 'asc');
    // }



    // public function category() {
    //     return $this->belongsTo(
    //         Category::class,
    //         'category_id',
	// 		'id',
    //     );
    // }



    // public function group() {
    //     return $this->belongsTo(
    //         Group::class,
    //         'group_id',
    //         'id'
    //     );
    // }







    
    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id')->orderBy('order', 'asc');
        // return $this->hasMany(Category::class)->with('categories')->orderBy('order', 'asc');
    }

    // Определяем отношение для родительской категории
    public function parentCategory() {
        return $this->belongsTo(Category::class, 'category_id');
        // return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getAllParents() {
        $parents = collect();

        $category = $this;

        while ($category->parentCategory) {
            $parents->push($category->parentCategory);
            $category = $category->parentCategory;
        }

        return $parents;
    }




    //
    public function getFullSlugAttribute()
    {
        // Собираем все родительские категории
        $slugs = collect([$this->slug]);

        $category = $this->parentCategory;

        while ($category) {
            $slugs->prepend($category->slug); // Добавляем slug родительской категории в начало коллекции
            $category = $category->parentCategory;
        }

        // Объединяем все slugs через "/"
        return $slugs->implode('/');
    }


    public function getRecursiveAttribute($attribute) {
        $category = $this;
    
        // Рекурсивно проверяем категорию и её родителей
        while ($category) {
            if (!empty($category->$attribute)) {
                return $category->$attribute;
            }
    
            // Переходим к родительской категории
            $category = $category->parentCategory;
        }
    
        // Если не найдено значение, можно вернуть null или дефолтное значение
        return null;
    }



    //
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
    
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    //
    public static function findBySlug($slug)
    {
        return static::whereSlug($slug)->first();
    }




    //// Пивотные таблицы

 
    protected function getFaqPivotTable(){
        return 'category_faqs';
    }
    protected function getTagPivotTable(){
        return 'category_tags';
    }
    protected function getCategoryPivotTable(){
        return 'category_categories';
    }
    protected function getItemPivotTable(){
        return 'category_items';
    }
    protected function getLegoPivotTable(){
        return 'category_lego';
    }



}
