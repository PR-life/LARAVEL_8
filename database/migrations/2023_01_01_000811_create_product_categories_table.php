<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
        
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');

            $table->index('product_id', 'product_category_category_idx');
            $table->index('category_id', 'product_category_product_idx');

            $table->foreign('product_id', 'product_category_category_fk')->on('products')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'product_category_product_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['product_id','category_id']);
            
			$table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
