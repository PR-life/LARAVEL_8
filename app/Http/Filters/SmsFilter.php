<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
//
use App\Models\Sms;


class SmsFilter extends AbstractFilter {

	// 1 пишем констакты, берем из нужных App\Http\Requests\ADMIN\Post
    public const SMS = 'textsms';
    public const NAME = 'name';
    public const CATEGORY_ID = 'category_id';
    public const SCHEMA = 'schema';
    public const STATUS = 'status';

    protected function getCallbacks(): array
    {
        return [
            self::SMS => [$this, 'sms'],
            self::NAME => [$this, 'textsms'],
            // self::ANSWER => [$this, 'answer'],
            self::CATEGORY_ID => [$this, 'category_id'],
            self::SCHEMA => [$this, 'schema'],
            self::STATUS => [$this, 'status'],
            // self::CATEGORY_ID => [$this, 'category_id'],
        ];
    }

    public function sms(Builder $builder, $value)
    {
        $builder->where('sms', 'like', "%{$value}%");
    }
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }
    public function category_id(Builder $builder, $value)
    {
        // dd(222);
        $builder->where('category_id', $value);
    }
    public function schema(Builder $builder, $value)
    {
        $builder->where('schema', $value);
    }
    public function status(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }
}
