<?php

namespace App\Models\pivot\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLego extends Model
{
    use HasFactory;

    protected $table = 'category_lego';
    protected $guarded = false;
}
