<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;


class GroupFilter extends AbstractFilter {

	// 1 пишем констакты, берем из нужных App\Http\Requests\ADMIN\Post
    public const NAME = 'name';
    public const STATUS = 'status';
    public const CATEGORY_ID = 'category_id';
    public const USER_ID = 'user_id';
    // public const CATEGORY_SKU = 'category_sku';
    // public const MAFIA = 'mafia';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::STATUS => [$this, 'status'],
            self::CATEGORY_ID => [$this, 'category_id'],
            self::USER_ID => [$this, 'user_id'],
            // self::CATEGORY_SKU => [$this, 'category_sku'],
            // self::MAFIA => [$this, 'mafia'],
        ];
    }
	
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }

    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

    public function user_id(Builder $builder, $value)
    {
        $builder->where('user_id', $value);
    }	
    // public function category_sku(Builder $builder, $value)
    // {
    //     $builder->where('category_sku', $value);
    // }

    // public function mafia(Builder $builder, $value)
    // {
    //     $builder->where('mafia', '!=', $value);
    // }

}
