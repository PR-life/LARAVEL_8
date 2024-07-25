<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class LegoFilter extends AbstractFilter {

	// 1 пишем констакты, берем из нужных App\Http\Requests\ADMIN\Post
    public const NAME = 'name';
    public const CATEGORY_ID = 'category_id';
    public const TAG_ID = 'tag_id';
    // public const STATUS = 'status';
    // public const USER_ID = 'user_id';
    // public const CATEGORY_SKU = 'category_sku';
    // public const MAFIA = 'mafia';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::CATEGORY_ID => [$this, 'category_id'],
            self::TAG_ID => [$this, 'tag_id'],
            // self::STATUS => [$this, 'status'],
            // self::USER_ID => [$this, 'user_id'],
            // self::CATEGORY_SKU => [$this, 'category_sku'],
            // self::MAFIA => [$this, 'mafia'],
        ];
    }
	
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }
    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value)->orderBy('order','asc');

    }
    public function tag_id(Builder $builder, $value)
    {
        $builder->where('tag_id', $value)->orderBy('order','asc');

    }

}
