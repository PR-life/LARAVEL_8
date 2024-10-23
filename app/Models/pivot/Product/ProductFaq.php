<?php

namespace App\Models\pivot\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFaq extends Model
{
    use HasFactory;

    protected $table = 'product_faqs';
    protected $guarded = false;
}
