<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
//
use App\Models\_child\{Collection,Service};

class BaseContent extends Model
{

    // getForeignKey() ---> {имя_модели}_id
    // В Laravel метод getForeignKey() возвращает имя внешнего ключа (foreign key) для текущей модели в отношениях Eloquent.
 

    public static function findBySlug($slug)
    {
        return static::whereSlug($slug)->first();
    }
 


    // LIB
    public function serviceCategory() 
    {
        return $this->relatedEntity(Category::class, 'category_services_id');
    }
    public function serviceDelivery() 
    {
        return $this->relatedEntity(Service::class, 'service_delivery_id');
    }
    public function paperPayment() 
    {
        return $this->relatedEntity(Paper::class, 'paper_payment_id');
    }
    public function paperWarranty() 
    {
        return $this->relatedEntity(Paper::class, 'paper_warranty_id');
    }
                //TODO Улучшение через использование массива конфигураций
                // Если у тебя есть много однотипных связей, можно пойти ещё дальше и использовать массив для хранения информации о связях, а затем динамически строить методы:
                // protected $relations = [
                //     'serviceCategory' => [Category::class, 'category_services_id'],
                //     'paperPayment' => [Paper::class, 'paper_payment_id'],
                //     'paperWarranty' => [Paper::class, 'paper_warranty_id'],
                //     'serviceDelivery' => [Service::class, 'service_delivery_id'],
                // ];
                
                // public function __call($method, $parameters)
                // {
                //     if (isset($this->relations[$method])) {
                //         return $this->relatedEntity($this->relations[$method][0], $this->relations[$method][1]);
                //     }
                
                //     return parent::__call($method, $parameters);
                // }

    // LVL 4
    public function pivotPapers() {

        return $this->belongsToMany(
            Paper::class,
            $this->getPivotPaperTable(),
            $this->getForeignKey(),
            'paper_id'
        );
    }
    public function pivotServices() {

        return $this->belongsToMany(
            Service::class,
            $this->getPivotServiceTable(),
            $this->getForeignKey(),
            'service_id'
        );
    }

    public function pivotItems() {

        return $this->belongsToMany(
            Item::class,
            $this->getPivotItemTable(),
            $this->getForeignKey(),
            'item_id'
        );
    }

    public function pivotProducts() {

        return $this->belongsToMany(
            Product::class,
            $this->getPivotProductTable(),
            $this->getForeignKey(),
            'product_id'
        );
    }

    // LVL 3
    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            $this->getItemPivotTable(),
            $this->getForeignKey(),
            'item_id'
        );
    }

    public function services()
    {
        return $this->belongsToMany(
            Service::class,
            $this->getServicePivotTable(),
            $this->getForeignKey(),
            'service_id'
        );
    }

    public function papers() {

        return $this->belongsToMany(
            Paper::class,
            $this->getPaperPivotTable(),
            $this->getForeignKey(),
            'paper_id'
        );
    }

    // LVL 2
    public function lego()
    {
        return $this->belongsToMany(
            Lego::class,
            $this->getLegoPivotTable(),
            $this->getForeignKey(),
            'lego_id'
        )->orderBy('order', 'asc');
    }

    public function details()
    {
        return $this->belongsToMany(
            Detail::class,
            $this->getDetailPivotTable(),
            $this->getForeignKey(),
            'detail_id'
        );
    }

    public function faqs()
    {
        return $this->belongsToMany(
            Faq::class,
            $this->getFaqPivotTable(),
            $this->getForeignKey(),
            'faq_id'
        );
    }


    

    // LVL 1
    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            $this->getTagPivotTable(),
            $this->getForeignKey(),
            'tag_id'
        );
    }

    public function tag() 
    {
        return $this->belongsTo(
            Tag::class,
            'tag_id',
			'id',
        );
    }

    public function collections()
    {
        return $this->belongsToMany(
            Collection::class,
            $this->getCollectionPivotTable(),
            $this->getForeignKey(),
            'collection_id'
        );
    }

    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            $this->getCategoryPivotTable(),
            $this->getForeignKey(),
            'category_id'
        );
    }

    public function category() 
    {
        return $this->belongsTo(
            Category::class,
            'category_id',
			'id',
        );
    }

    public function groups() {
        return $this->belongsToMany(
            Group::class,
            $this->getGroupPivotTable(),
            $this->getForeignKey(),
            'group_id'
        );
    }
    public function group() 
    {
        return $this->belongsTo(
            Group::class,
            'group_id',
			'id',
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id',
            'id'
        );
    }


    //
    // Аксессор для получения даты обновления как объекта Carbon
	public function getDateUpdateAsCarbonAttribute(){
		return Carbon::parse($this->updated_at);
	}

        
    // Аксессор для получения даты создания как объекта Carbon
	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}






    // !! универсальный метод с заменой имен стобцов
    // public function user()
    // {
    //     return $this->belongsTo(
    //         User::class,
    //         $this->getUserForeignKey(), // Внешний ключ
    //         $this->getUserOwnerKey()    // Владеющий ключ
    //     );
    // }   
    // protected function getUserForeignKey()
    // {
    //     return 'user_id';
    // }

    // protected function getUserOwnerKey()
    // {
    //     return 'id';
    // }


    // универсальный метод для построения отношения belongsTo
    public function relatedEntity($relatedClass, $foreignKey)
    {
        return $this->belongsTo(
            $relatedClass,
            $foreignKey,
            'id' // Владеющий ключ остается неизменным
        );
    }

 
}
