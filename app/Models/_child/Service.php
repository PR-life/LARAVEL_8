<?php

namespace App\Models\_child;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Models\Traits\Filterable;
// use Carbon\Carbon;
//
use App\Models\Paper;
use App\Models\{Group,Category,Tag,Faq,Item};

class Service extends Paper
{
    protected $table = 'services';

    public function items() {
        return $this->belongsToMany(
            Item::class,
            'service_items',
            'service_id',
            'item_id'
        )->orderBy('order');
    }

    public function faqs() {
        return $this->belongsToMany(
            Faq::class,
            'service_faqs',
            'service_id',
            'faq_id'
        )->orderBy('order');
    }


    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'service_tags',
            'service_id',
            'tag_id'
        )->orderBy('order');
    }

    public function categories() {
        return $this->belongsToMany(
            Category::class,
            'service_categories',
            'service_id',
            'category_id'
        )->orderBy('order');
    }

    public function group() {
        return $this->belongsTo(
            Group::class,
            'group_id',
			'id',
        );
    }
}
