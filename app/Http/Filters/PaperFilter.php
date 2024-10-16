<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
//
use App\Models\Paper;


class PaperFilter extends AbstractFilter {

	// 1 пишем константы, берем из нужных App\Http\Requests\ADMIN\Post
    public const NAME = 'name';
    public const TAG = 'tag_id';
    public const ANSWER = 'answer';
    public const SCHEMA = 'schema';
    public const STATUS = 'status';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::TAG => [$this, 'tag_id'],
            self::ANSWER => [$this, 'answer'],
            self::SCHEMA => [$this, 'schema'],
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
    public function schema(Builder $builder, $value)
    {
        $builder->where('schema', $value);
    }
    public function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }
    public function category_id(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
    public function tag_id(Builder $builder, $value)
    {
        $builder->where('tag_id', $value);
    }
}
