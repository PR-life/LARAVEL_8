<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
//
use Carbon\Carbon;
//
use App\Models\_child\Service;


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


    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getRecursiveAttribute($attribute) 
    {
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

    ////
    ////

    public function categoryServices() {
        return $this->belongsTo(
            Category::class,
            'category_services_id',
			'id',
        );
    }


    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id')->orderBy('order', 'asc');
    }
    public function parentCategory() 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getAllParents() 
    {
        $parents = collect();
        $category = $this;

        while ($category->parentCategory) {
            $parents->push($category->parentCategory);
            $category = $category->parentCategory;
        }

        return $parents;
    }

    //
    //
    // LVL 4
    protected function getPivotPaperTable(){
        return 'paper_categories';
    }
    protected function getPivotServiceTable(){
        return 'service_categories';
    }
    protected function getPivotItemTable(){
        return 'item_categories';
    }


    // LVL 3
    protected function getItemPivotTable(){
        return 'category_items';
    }
    protected function getServicePivotTable(){
        return 'category_services';
    }


    // LVL 2
    protected function getLegoPivotTable(){
        return 'category_lego';
    }
    // protected function getDetailPivotTable(){
    //     return 'category_details';
    // }
    protected function getFaqPivotTable(){
        return 'category_faqs';
    }

    // LVL 1
    protected function getTagPivotTable(){
        return 'category_tags';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_categories', 'category_id', 'related_category_id');
    }

    //
    // вроде для EN
    public function getAttribute($key) {
        $default = parent::getAttribute($key);
        if ((app()->getLocale() !== 'ru') && isset($this->lang_fields) && in_array($key, $this->lang_fields)) {
            return $this->{$key.'_'.app()->getLocale()} ?? $this->{'en_'.$key};
            // return $this->{$key.'_'.app()->getLocale()} ?? $this->{$key.'_en'};
        }
        return $default;
    }
}
