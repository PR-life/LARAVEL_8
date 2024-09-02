<?php

namespace App\Models\pivot\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;

    protected $table = 'category_services';
    protected $guarded = false;
}
