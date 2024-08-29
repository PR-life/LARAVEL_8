<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
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


    public function childrenProducts()
    {
        return $this->hasMany(Product::class)->with('products')->orderBy('order', 'asc');
    }

    protected function getLegoPivotTable(){
        return 'product_lego';
    }

    // protected function getItemPivotTable(){
    //     return 'item_items';
    // }

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'product_products',
            $this->getForeignKey(),
            'products_id'
        );
    }

    protected function getFaqPivotTable(){
        return 'product_faqs';
    }
    protected function getTagPivotTable(){
        return 'product_tags';
    }
    protected function getCategoryPivotTable(){
        return 'product_categories';
    }



    public function getRouteKeyName(): string
    {
        if (request()->is('admin/*')) {
            return 'id';
        }
        return 'slug'; 
    }

}
