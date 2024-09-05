<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
//

class Product extends BaseContent
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'products';
    protected $guarded = false;


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


    ////

    // protected function getItemPivotTable(){
    //     return 'item_items';
    // }
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


    // Добавляем метод для генерации полного slug
    public function getFullSlugAttribute()
    {
        // Если у продукта есть родительский продукт, рекурсивно добавляем его slug
        if ($this->parent) {
            return $this->parent->full_slug . '/' . $this->slug;
        }

        // Если нет родителя, возвращаем просто slug
        return $this->slug;
    }




    // Маршруты
    public function getRouteKeyName(): string
    {
        if (request()->is('admin/*')) {
            return 'id';
        }
        return 'slug'; 
    }

}
