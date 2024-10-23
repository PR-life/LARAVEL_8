<?php

namespace App\Models\pivot\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProduct extends Model
{
    use HasFactory;

    protected $table = 'product_products';
    protected $guarded = false;
}
