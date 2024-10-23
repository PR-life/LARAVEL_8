<?php

namespace App\Models\pivot\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLego extends Model
{
    use HasFactory;

    protected $table = 'product_lego';
    protected $guarded = false;
}
