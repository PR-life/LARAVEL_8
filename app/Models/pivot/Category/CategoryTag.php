<?php

namespace App\Models\pivot\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTag extends Model
{
    use HasFactory;

    protected $table = 'category_tags';
    protected $guarded = false;
}
