<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
//
use App\Models\Paper;


class PaperFilter extends AbstractFilter {

	// 1 пишем констакты, берем из нужных App\Http\Requests\ADMIN\Post
    public const NAME = 'name';
    public const CATEGORY_ID = 'category_id';
    public const SHEMA = 'shema';
    public const STATUS = 'status';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::CATEGORY_ID => [$this, 'category_id'],
            self::SHEMA => [$this, 'shema'],
            self::STATUS => [$this, 'status'],
            // self::CATEGORY_ID => [$this, 'category_id'],
        ];
    }
	
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }
    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
    public function shema(Builder $builder, $value)
    {
        $builder->where('shema', $value);
    }
    public function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }
}
