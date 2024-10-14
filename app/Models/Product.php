<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
//
use App\Models\_child\Service;

class Product extends BaseContent
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'products';
    protected $guarded = false;



    public function sms() 
    {
        return $this->hasMany(
            Sms::class,
            'product_id',
			'id',
        )->orderBy('created_at', 'asc');
    }

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
    public function serviceCategory() 
    {
        return $this->belongsTo(
            Category::class,
            'category_services_id',
			'id',
        );
    }
 

    //
    public function surrogate() 
    {
        return $this->belongsTo(
            Product::class,
            'product_surrogate_id',
			'id',
        );
    }



    //
    public function parent() 
    {
        return $this->belongsTo(
            Product::class,
            'product_id',
			'id',
        );
    }

    public function childrenProducts()
    {
        return $this->hasMany(Product::class)->with('products')->orderBy('order', 'asc');
    }

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'product_products',
            $this->getForeignKey(),
            'products_id'
        );
    }

 
    public function getCategoryAttributeRecursive($attribute) {
        // Проверяем категорию товара
        if ($this->category) {
            return $this->category->getRecursiveAttribute($attribute);
        }
    
        return null;
    }

    // // Универсальный метод для получения свойств родительской категории
    // public function getParentCategoryAttribute($property)
    // {
    //     return $this->parent?->category?->{$property};
    //     // return optional(optional($this->parent)->category)->{$property};
    // }

    // public function __get($name)
    // {
    //     // Проверяем, если имя начинается с "parentCategory_", то обрабатываем как обращение к свойству родительской категории
    //     if (strpos($name, 'parentCategory_') === 0) {
    //         $property = str_replace('parentCategory_', '', $name);
    //         return $this->getParentCategoryAttribute($property);
    //     }
    
    //     // В остальных случаях вызываем стандартное поведение __get
    //     return parent::__get($name);
    // }
    // {!! $item->parentCategory_text_top !!}
    // {!! $item->parentCategory_another_property !!}


    //// Пивотные таблицы

 
    protected function getFaqPivotTable(){
        return 'product_faqs';
    }
    protected function getTagPivotTable(){
        return 'product_tags';
    }
    protected function getCategoryPivotTable(){
        return 'product_categories';
    }
    protected function getLegoPivotTable(){
        return 'product_lego';
    }
    // protected function getItemPivotTable(){
    //     return 'item_items';
    // }

    // Добавляем метод для генерации полного slug
    public function getFullSlugAttribute()
    {

        //оптимизирован с использованием тернарного оператора:
        return $this->parent ? $this->parent->full_slug . '/' . $this->slug : $this->slug;


        //код ДО
        // // Если у продукта есть родительский продукт, рекурсивно добавляем его slug
        // if ($this->parent) {
        //     return $this->parent->full_slug . '/' . $this->slug;
        // }

        // // Если нет родителя, возвращаем просто slug
        // return $this->slug;
    }
 

    // Маршруты
    public function getRouteKeyName(): string
    {
        if (request()->is('admin/*')) {
            return 'id';
        }
        return 'slug'; 
    }




    //
    public static function findBySlug($slug)
    {
        return static::whereSlug($slug)->first();
    }

}
