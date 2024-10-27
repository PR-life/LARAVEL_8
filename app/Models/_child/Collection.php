<?php

namespace App\Models\_child;

use App\Models\Category;
use App\Models\{Item};

class Collection extends Category
{
    protected $table = 'collections';

    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            'item_collections',
            'collection_id',
            'item_id'
        );
    }
 

}

