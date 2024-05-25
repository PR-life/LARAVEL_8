<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
//
use App\Models\Paper;


class PaperFilter extends AbstractFilter {

	// 1 пишем константы, берем из нужных App\Http\Requests\ADMIN\Post
    public const NAME = 'name';
    public const TAG = 'tag';
    public const ANSWER = 'answer';
    public const SHEMA = 'shema';
    public const STATUS = 'status';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            // self::TAG => [$this, 'tag'],
            self::ANSWER => [$this, 'answer'],
            self::SHEMA => [$this, 'shema'],
            self::STATUS => [$this, 'status'],
            self::CATEGORY_ID => [$this, 'category_id'],
        ];
    }
	
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }
    public function answer(Builder $builder, $value)
    {
        $builder->where('answer', '!=', null);
    }
    public function shema(Builder $builder, $value)
    {
        $builder->where('shema', $value);
    }
    public function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }
    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
}
