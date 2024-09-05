<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class BaseContent extends Model
{

    public function faqs()
    {
        return $this->belongsToMany(
            Faq::class,
            $this->getFaqPivotTable(),
            $this->getForeignKey(),
            'faq_id'
        );
    }

    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            $this->getItemPivotTable(),
            $this->getForeignKey(),
            'item_id'
        );
    }

    public function lego()
    {
        return $this->belongsToMany(
            Lego::class,
            $this->getLegoPivotTable(),
            $this->getForeignKey(),
            'lego_id'
        )->orderBy('order', 'asc');
    }

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
 
}
