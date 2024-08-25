<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductsTable extends Migration
{
    public function up()
    {
        Schema::create('product_products', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('products_id');

            $table->index('product_id', 'product_products_product_idx');
            $table->index('products_id', 'product_product_products_idx');

            $table->foreign('product_id', 'product_products_product_fk')->on('products')->references('id')->onDelete('cascade');
            $table->foreign('products_id', 'products_product_products_fk')->on('products')->references('id')->onDelete('cascade');



            $table->unique(['product_id','products_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_products');
    }
}
